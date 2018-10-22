<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Venue;

class VenueController extends Controller
{
    public function index()
    {
    $venues = Venue::limit(100)
        ->get();
    
    return view('/venues/index', compact(['venues']));
    }   
}
