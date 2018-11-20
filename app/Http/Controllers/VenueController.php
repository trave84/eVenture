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
        // ALL VENUES WITH TAGS
        $venues = Venue::with('tags')->get();
        $tags_by_cat = [];

        foreach($venues as $venue){
           foreach ($venue->tags as $tag) {
                $tags_by_cat[$venue->id][$tag->category_id][] = $tag;
            }
        }
        // dd($tags_by_cat);
        return view('venues.index', compact('venues', 'tags_by_cat'));
    }

    public function show($id)
    {
        $venue = Venue::findOrFail($id);
        $tags_by_cat = [];

        foreach ($venue->tags as $tag) {
            $tags_by_cat[$venue->id][$tag->category_id][] = $tag;
        }
        // dd($tags_by_cat);
        return view('venues.show', compact('venue', 'tags_by_cat'));
    }


    public function barsPubs()
    {   
        // ALL VENUES WITH TAGS[...]
        $tags= [1,2,3,4,5,7,9,10,11];
        $tags_by_cat =[];
        
        $venues_query = Venue::query();
        foreach ($tags as $tag){
            $venues_query->whereHas('tags', function($query) use($tags){
                // THAT HAS tagid from  $tags[]
                $query->whereIn('tags.id', $tags);  //Verifies: ('column_value' , IN , $array)
            });
        }        
        $venues = $venues_query->with('tags')->get();
        foreach($venues as $venue){
            foreach ($venue->tags as $tag) {
                 $tags_by_cat[$venue->id][$tag->category_id][] = $tag;
             }
         }
        // dd($tags_by_cat);
        return view('venues.barsPubs.index', compact('venues', 'tags_by_cat'));

        //======= WAS THE RETURN BEFORE:
        // return view('venues.barsPubs.index', compact('venues'));
    }

    public function clubs()
    {   
        $tags = [6];
        $tags_by_cat = [];

        $venues_query = Venue::query();
        foreach ($tags as $tag){
            $venues_query->whereHas('tags', function($query) use($tags){
                $query->whereIn('tags.id', $tags);
            });
        }

        $venues = $venues_query->with('tags')->get();
        foreach($venues as $venue){
            foreach ($venue->tags as $tag) {
                 $tags_by_cat[$venue->id][$tag->category_id][] = $tag;
             }
         }
        // dd($tags_by_cat);
        return view('venues.clubs.index', compact('venues', 'tags_by_cat'));
    }
    
    public function restaurants()
    {   
        $tags= [8,9];
        $tags_by_cat = [];
        $venues_query = Venue::query();
        // dd($venues);

        foreach ($tags as $tag){
            $venues_query->whereHas('tags', function($query) use($tags){
                $query->whereIn('tags.id', $tags);
            });
        }
        $venues = $venues_query->with('tags')->get();

        foreach($venues as $venue){
            foreach ($venue->tags as $tag) {
                 $tags_by_cat[$venue->id][$tag->category_id][] = $tag;
             }
         }
        // dd($tags_by_cat);
        return view('venues.restaurants.index', compact('venues', 'tags_by_cat'));
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

    public function getCategoriesForVenues()
    {   
        $venues = Venue::with('tags')->get();
        foreach($venues as $tags => $tag_id){
            $venues->whereHas('tags', function ($q) use($tags){
                
            });
        }
        return $venues;

        $tagsOfVenue = $req->selectedTags;

        $venues = Venue::query();

        foreach($selectedTags as $category => $tags){
            $venues->whereHas('tags', function($query) use($tags){
                $query->whereIn('tags.id', $tags);
            });
        }
        return $venues->with('tags')->get();
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
}
