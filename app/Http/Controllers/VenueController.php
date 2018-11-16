<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Venue;
use \App\Attribute; 
use \App\Feature;
use \App\User;
use \App\Tag;
use \App\Category;


class VenueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create', 'store', 'edit');
    }

    public function index()
    {   
        // tag->category
        // ALL VENUES WITH TAGS  OF EACH CATEGORY
        $venues = Venue::with('tags')->get();
        $categories = Category::with('tags')->get();

        return [$venues, $categories];
        return view('venues.index', compact('venues','categories'));
    }

    public function create()
    {
        $features = Feature::all();
        $attributes = Attribute::all();
        // $mood = Attribute::where ;
        // $energy = Attribute:: ;

        
        return view('venues.create')->with(compact('features', 'attributes'));
    }

    // FORM: action() - Venue::create()
    public function store(Request $request)
    {
        $venue = Venue::create($request->all());
        $venue->with('tags')->get();
        
        return redirect (action('VenueController@index'));
    }

    public function show($id)
    {
        $venue = Venue::findOrFail($id);
        
        return view('venues.show', compact('venue'));
    }


    public function edit($id)
    {
        $venue = Venue::findOrFail($id);
        $features = Feature::all();
        $attributes = Attribute::all();
        
        return view('venues.edit')->with(compact('venue', 'features', 'attributes'));
    }

    public function update(Request $request, $id)
    {
        $venue = Venue::findOrFail($id);
        $venue->update($request->all());

        return redirect (action('VenueController@index'));
    }

    public function destroy($id)
    {
        $venue = Venue::findOrFail($id);
        $venue->delete();

        return redirect (action('VenueController@index'));
    }

// API ENDPOINT ACTIONS:
    
    // api/venues
    public function venues(){
        $venues = Venue::all();

        return $venues;
    }

    // api/venues/venuetypes
    public function venuetypes(){
        $venue_types_values = Venue::all();

        // $venues = [];
        // $venues = Venue::where('venuetype_id', '=', 'venue_type_values');

        return $venue_types_values;
    }

    // api/venues/{id}
    public function filter_results(Request $request, $id){
        $tags = Tag::get();
        $venue = Venue::findOrFail($id);
        $categories = Category::all();

        // $searched_venues = ; 
        // {{ dd($tags); }}
        // $checkboxes = $request->input('tag-'.$tags->id);
        // {{ dd($tags); }}
        // $venues = App\Venue::where ;

        return [$venue];
    }


}
