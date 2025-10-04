<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VesselRoute extends Model
{
    use HasFactory;

    protected $table = 'vessel_routes'; // if your table name is vessel_routes
    protected $primaryKey = 'id'; // change if different

    protected $fillable = [
        'route',
        'departure_time',
        'interval',
        'travel_time',
        'port_of_origin',
    ];
}
