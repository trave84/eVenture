<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Venue;
use \App\Attribute;
use \App\Feature;
use \App\User;


class VenueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create', 'store', 'edit');
    }

    public function index()
    {
        $venues = Venue::limit(25)->get();

        return view('venues.index', compact(['venues']));
    }

    public function create()
    {
        $features = Feature::all();
        $attributes = Attribute::all();

        return view('admin.create')
        ->with(compact('features', 'attributes'));
    }

    public function store(Request $request)
    {
        $venue = Venue::create($request->all());

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
        
        return view('admin.edit')->with(compact('venue', 'features', 'attributes'));
    }

    public function update(Request $request, $id)
    {
        $venue = Venue::findOfFail($id);
        $venue->update($request->all());

        return redirect (action('VenueController@index'));
    }

    public function destroy()
    {
        $venue = Venue::findOfFail($id);
        $venue->delete();

        return redirect (action('VenueController@index'));
    }
}
