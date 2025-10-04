<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }*/

    public function run(): void
    {
        DB::table('passenger')->insert([
            [
                'passenger_firstname' => 'Juan',
                'passenger_midinitial' => 'D',
                'passenger_lastname' => 'Cruz',
                'passenger_suffix' => null,
                'passenger_age' => 25,
                'passenger_gender' => 'M',
                'passenger_type' => 'adult',
                'passenger_address' => 'Cebu City',
                'passenger_contactno' => '09123456789',
                'passenger_email' => 'juan@example.com',
                'passenger_idnumber' => 'ID12345',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);


        DB::table('vessel_routes')->insert([
            [
                'vessel_name' => 'MV Lapu-Lapu',
                'route_from' => 'Cebu',
                'route_to' => 'Baybay, Leyte',
                'departure_time' => '20:00:00',
                'operating_days' => json_encode(['Tuesday', 'Thursday', 'Sunday']),
                'travel_time_hours' => 6,
                'port_of_origin' => 'Port of Cebu, Passenger Terminal 2 (Pier 3)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vessel_name' => 'MV Lapu-Lapu',
                'route_from' => 'Baybay, Leyte',
                'route_to' => 'Cebu',
                'departure_time' => '20:00:00',
                'operating_days' => json_encode(['Monday', 'Wednesday', 'Friday']),
                'travel_time_hours' => 6,
                'port_of_origin' => 'Port of Baybay',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vessel_name' => 'MV Lapu-Lapu',
                'route_from' => 'Cebu',
                'route_to' => 'Talibon',
                'departure_time' => '21:00:00',
                'operating_days' => json_encode(['Monday', 'Wednesday', 'Friday']),
                'travel_time_hours' => 4,
                'port_of_origin' => 'Port of Cebu, Passenger Terminal 2 (Pier 3)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vessel_name' => 'MV Lapu-Lapu',
                'route_from' => 'Talibon',
                'route_to' => 'Cebu',
                'departure_time' => '21:00:00',
                'operating_days' => json_encode(['Tuesday', 'Thursday', 'Sunday']),
                'travel_time_hours' => 4,
                'port_of_origin' => 'Port of Talibon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vessel_name' => 'MV Lapu-Lapu',
                'route_from' => 'Cebu',
                'route_to' => 'Ormoc',
                'departure_time' => '21:00:00',
                'operating_days' => json_encode(['Tuesday', 'Thursday', 'Sunday']),
                'travel_time_hours' => 4,
                'port_of_origin' => 'Port of Ormoc',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);


        DB::table('admin')->insert([
            'admin_name' => 'Admin User',
            'admin_user' => 'admin',
            'admin_password' => Hash::make('12345'), // hashed password
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Get the inserted admin ID
        $adminId = DB::getPdo()->lastInsertId();

        // Insert one staff linked to the admin
        DB::table('staff')->insert([
            'admin_id' => $adminId,
            'staff_name' => 'Staff User',
            'staff_user' => 'staff',
            'staff_password' => Hash::make('12345'), // hashed password
            'staff_age' => 25,
            'staff_gender' => 'M',
            'staff_email' => 'staff@example.com',
            'staff_status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
