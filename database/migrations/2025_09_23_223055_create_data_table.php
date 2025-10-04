<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // ==========================
        // BASE TABLES
        // ==========================
        Schema::create('admin', function (Blueprint $table) {
            $table->id('admin_id');
            $table->string('admin_name', 50);
            $table->string('admin_user', 10);
            $table->string('admin_password');
            $table->timestamps();
        });

        Schema::create('passenger', function (Blueprint $table) {
            $table->id('passenger_id');
            $table->string('passenger_firstname', 50);
            $table->char('passenger_midinitial', 1)->nullable();
            $table->string('passenger_lastname', 50);
            $table->string('passenger_suffix')->nullable();
            $table->integer('passenger_age');
            $table->enum('passenger_gender', ['M', 'F']);
            $table->enum('passenger_type', [
                'adult',
                'student',
                'minor',
                'uniformed personnel',
                'senior',
                'PWD'
            ]);
            $table->string('passenger_address', 255);
            $table->string('passenger_contactno');
            $table->string('passenger_email')->nullable();
            $table->string('passenger_idnumber')->nullable();
            $table->timestamps();
        });

        Schema::create('staff', function (Blueprint $table) {
            $table->id('staff_id');
            $table->foreignId('admin_id')->constrained('admin', 'admin_id');
            $table->string('staff_name', 50);
            $table->string('staff_user', 10);
            $table->string('staff_password');
            $table->integer('staff_age');
            $table->enum('staff_gender', ['M', 'F']);
            $table->string('staff_email');
            $table->enum('staff_status', ['active', 'inactive']);
            $table->timestamps();
        });

        Schema::create('promo', function (Blueprint $table) {
            $table->id('promo_id');
            $table->enum('promo_type', ['discount', 'freebie']);
            $table->string('promo_code');
            $table->string('promo_description', 255);
            $table->date('promo_start_date');
            $table->date('promo_end_date');
            $table->enum('promo_status', ['active', 'inactive']);
            $table->decimal('promo_discount_rate', 5, 2);
            $table->timestamps();
        });

        Schema::create('sender', function (Blueprint $table) {
            $table->id('sender_id');
            $table->string('sender_name');
            $table->string('sender_contactno');
            $table->string('sender_email')->nullable();
            $table->timestamps();
        });

        Schema::create('consignee', function (Blueprint $table) {
            $table->id('consignee_id');
            $table->string('consignee_name');
            $table->string('consignee_contactno');
            $table->timestamps();
        });

        Schema::create('cargo_item', function (Blueprint $table) {
            $table->id('cargo_item_id');
            $table->string('cargo_item_classification');
            $table->string('cargo_item_description');
            $table->decimal('cargo_item_freight', 10, 2);
            $table->decimal('cargo_item_arrastre', 10, 2);
            $table->enum('cargo_item_type', ['Type A', 'Type B', 'Type C']);
            $table->integer('cargo_item_volume');
            $table->integer('cargo_item_weight');
            $table->integer('cargo_item_length');
            $table->integer('cargo_item_height');
            $table->integer('cargo_item_width');
            $table->timestamps();
        });

        // ==========================
        // VESSEL RELATED
        // ==========================
        Schema::create('vessel', function (Blueprint $table) {
            $table->id('vessel_id');
            $table->foreignId('admin_id')->constrained('admin', 'admin_id');
            $table->string('vessel_name');
            $table->integer('vessel_total_passenger_capacity');
            $table->text('vessel_cot_plan_url')->nullable();
            $table->timestamps();
        });

        Schema::create('accommodation', function (Blueprint $table) {
            $table->id('accommodation_id');
            $table->foreignId('vessel_id')->constrained('vessel', 'vessel_id');
            $table->string('accommodation_name');
            $table->decimal('accommodation_regular_price', 10, 2);
            $table->timestamps();
        });

        Schema::create('hatch', function (Blueprint $table) {
            $table->id('hatch_id');
            $table->foreignId('vessel_id')->constrained('vessel', 'vessel_id');
            $table->string('hatch_label');
            $table->integer('hatch_capacity');
            $table->timestamps();
        });

        // ==========================
        // BOOKING & PAYMENT
        // ==========================
        Schema::create('booking', function (Blueprint $table) {
            $table->id('booking_ref_no');
            $table->timestamp('booking_date');
            $table->enum('booking_status', ['Confirmed', 'pending', 'canceled', 'refunded']);
            $table->timestamps();
        });

        Schema::create('payment', function (Blueprint $table) {
            $table->id('payment_id');
            $table->foreignId('booking_ref_no')->nullable()->constrained('booking', 'booking_ref_no');
            $table->enum('mode_of_payment', ['cash', 'Gcash']);
            $table->timestamp('payment_date');
            $table->decimal('total_amount', 10, 2);
            $table->enum('payment_status', ['Completed', 'Pending', 'Canceled']);
            $table->string('transaction_code')->nullable();
            $table->timestamps();
        });

        // ==========================
        // VOYAGES & TICKETS
        // ==========================
        Schema::create('voyage', function (Blueprint $table) {
            $table->id('voyage_id');
            $table->foreignId('vessel_id')->constrained('vessel', 'vessel_id');
            $table->enum('voyage_routefrom', ['Cebu', 'Manila', 'Davao', 'Other']);
            $table->enum('voyage_routeto', ['Cebu', 'Manila', 'Davao', 'Other']);
            $table->date('voyage_departuredate');
            $table->time('voyage_etd');
            $table->time('voyage_eta');
            $table->timestamp('voyage_arrival_time')->nullable();
            $table->enum('voyage_status', ['Enabled', 'Ongoing', 'Completed', 'Cancelled', 'Disabled']);
            $table->timestamps();
        });

        Schema::create('passenger_ticket', function (Blueprint $table) {
            $table->id('passenger_ticket_id');
            $table->foreignId('passenger_id')->constrained('passenger', 'passenger_id');
            $table->foreignId('voyage_id')->constrained('voyage', 'voyage_id');
            $table->foreignId('promo_id')->nullable()->constrained('promo', 'promo_id');
            $table->foreignId('payment_id')->nullable()->constrained('payment', 'payment_id');
            $table->foreignId('booking_ref_no')->nullable()->constrained('booking', 'booking_ref_no');
            $table->date('pt_valid_until');
            $table->integer('pt_cot_no');
            $table->decimal('pt_ticket_price', 10, 2);
            $table->timestamps();
        });

        // ==========================
        // CARGO
        // ==========================
        Schema::create('cargo_receipt', function (Blueprint $table) {
            $table->id('cargo_receipt_id');
            $table->foreignId('sender_id')->constrained('sender', 'sender_id');
            $table->foreignId('consignee_id')->constrained('consignee', 'consignee_id');
            $table->foreignId('cargo_item_id')->constrained('cargo_item', 'cargo_item_id');
            $table->foreignId('voyage_id')->constrained('voyage', 'voyage_id');
            $table->foreignId('payment_id')->nullable()->constrained('payment', 'payment_id');
            $table->foreignId('booking_ref_no')->nullable()->constrained('booking', 'booking_ref_no');
            $table->integer('cargo_item_qty');
            $table->timestamps();
        });

        Schema::create('bill_of_lading', function (Blueprint $table) {
            $table->id('bill_of_lading_id');
            $table->foreignId('cargo_receipt_id')->constrained('cargo_receipt', 'cargo_receipt_id');
            $table->foreignId('staff_id')->constrained('staff', 'staff_id');
            $table->date('bl_date_issued');
            $table->string('bl_loading_port');
            $table->string('bl_unloading_port');
            $table->timestamps();
        });

        // ==========================
        // MANIFEST
        // ==========================
        Schema::create('manifest', function (Blueprint $table) {
            $table->id('manifest_id');
            $table->foreignId('staff_id')->constrained('staff', 'staff_id');
            $table->foreignId('voyage_id')->constrained('voyage', 'voyage_id');
            $table->enum('manifest_type', ['passenger', 'cargo']);
            $table->date('manifest_date');
            $table->timestamp('manifest_date_generated');
            $table->foreignId('passenger_ticket_id')->nullable()->constrained('passenger_ticket', 'passenger_ticket_id');
            $table->unsignedBigInteger('cargo_ticket_id')->nullable();
            $table->timestamps();
        });

        // ==========================
        // REPRINT
        // ==========================
        Schema::create('reprint', function (Blueprint $table) {
            $table->id('reprint_id');
            $table->foreignId('passenger_ticket_id')->nullable()->constrained('passenger_ticket', 'passenger_ticket_id');
            $table->foreignId('cargo_receipt_id')->nullable()->constrained('cargo_receipt', 'cargo_receipt_id');
            $table->foreignId('staff_id')->constrained('staff', 'staff_id');
            $table->enum('reprint_ticket_type', ['passenger ticket', 'cargo receipt']);
            $table->string('reprint_ticket_reason', 255);
            $table->integer('reprint_ticket_counter');
            $table->timestamp('reprint_ticket_date');
            $table->timestamps();
        });

        // ==========================
        // NOTIFICATIONS
        // ==========================
        Schema::create('notification', function (Blueprint $table) {
            $table->id('notification_id');
            $table->foreignId('cargo_receipt_id')->nullable()->constrained('cargo_receipt', 'cargo_receipt_id');
            $table->foreignId('payment_id')->nullable()->constrained('payment', 'payment_id');
            $table->string('notification_message', 255);
            $table->enum('notification_type', ['cargo booking approval', 'payment received']);
            $table->enum('notification_status', ['approved', 'rejected', 'read', 'archived']);
            $table->timestamp('notification_created');
            $table->timestamps();
        });


        // VESSEL ROUTES
        Schema::create('vessel_routes', function (Blueprint $table) {
            $table->id('vessel_route_id');

            // keep vessel info as simple data, not FK
            $table->unsignedBigInteger('vessel_id')->nullable(); // optional, no foreign key
            $table->string('vessel_name', 100);                  // store vessel name directly

            $table->string('route_from', 100);
            $table->string('route_to', 100);
            $table->time('departure_time');
            $table->json('operating_days')->nullable(); // ["Monday","Tuesday"]
            $table->integer('travel_time_hours');
            $table->string('port_of_origin', 100);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vessel_routes');
        Schema::dropIfExists('notification');
        Schema::dropIfExists('reprint');
        Schema::dropIfExists('manifest');
        Schema::dropIfExists('bill_of_lading');
        Schema::dropIfExists('cargo_receipt');
        Schema::dropIfExists('passenger_ticket');
        Schema::dropIfExists('voyage');
        Schema::dropIfExists('payment');
        Schema::dropIfExists('booking');
        Schema::dropIfExists('hatch');
        Schema::dropIfExists('accommodation');
        Schema::dropIfExists('vessel');
        Schema::dropIfExists('cargo_item');
        Schema::dropIfExists('consignee');
        Schema::dropIfExists('sender');
        Schema::dropIfExists('promo');
        Schema::dropIfExists('staff');
        Schema::dropIfExists('passenger');
        Schema::dropIfExists('admin');
    }
};
