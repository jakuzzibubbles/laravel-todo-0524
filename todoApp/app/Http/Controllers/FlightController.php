<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index(){
        
        $allFlights = Flight::all();

        return view('flights', ['abc'=>$allFlights]);
    }
}
