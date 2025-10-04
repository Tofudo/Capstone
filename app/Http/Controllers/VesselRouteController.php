<?php

namespace App\Http\Controllers;

use App\Models\VesselRoute;

class VesselRouteController extends Controller
{
    public function index()
    {
        // fetch data
        $routes = VesselRoute::all();

        // pass to the view
        return view('passenger.passenger', compact('routes'));
        // or: return view('passenger.passenger', ['routes' => $routes]);
    }

}
