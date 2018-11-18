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
        
        // return venues;
        return view('venues.index', compact('venues'));
    }

    public function barsPubs()
    {   
        // tag->category
        // ALL VENUES WITH TAGS
        $tags= [1,2,3,4,5,7,9,10,11];
        $venues = Venue::query();
        // dd($venues);

        foreach ($tags as $tag){
            $venues->whereHas('tags', function($query) use($tags){
                // THAT HAS tagid from  $tags[]
                $query->whereIn('tags.id', $tags);  //Verifies: ('column_value' , IN , $array)
            });
        }
        $venues->with('tags')->get();
        return view('venues.barsPubs.index', compact('venues'));
    }
    public function clubs()
    {   
        // tag->category
        // ALL VENUES WITH TAGS
        $tags= [8];
        $venues = Venue::query();
        // dd($venues);

        foreach ($tags as $tag){
            $venues->whereHas('tags', function($query) use($tags){
                // THAT HAS tagid from  $tags[]
                $query->whereIn('tags.id', $tags);  //Verifies: ('column_value' , IN , $array)
            });
        }
        // return $venues->with('tags')->get();
        return view('venues.clubs.index', compact('venues'));
    }
    
    public function restaurants()
    {   
        // tag->category
        // ALL VENUES WITH TAGS
        $tags= [9,10];
        $venues = Venue::query();
        // dd($venues);

        foreach ($tags as $tag){
            $venues->whereHas('tags', function($query) use($tags){
                // THAT HAS tagid from  $tags[]
                $query->whereIn('tags.id', $tags);  //Verifies: ('column_value' , IN , $array)
            });
        }

        // return $venues->with('tags')->get();
        return view('venues.restaurants.index', compact('venues'));
    }

    public function show($id)
    {
        $venue = Venue::findOrFail($id)->with('photos')->get();
        return view('venues.show', compact('venue', 'photos'));
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

        // $venues = Venue::join('tag_venue', 'venues.id', '=', 'tag_venue.venue_id')
        // ->join('tag_venue', 'tags.id', '=', 'tag_venue.tag_id')
        // ->join('tags', 'categories.id', '=', 'tags.category_id')
        // ->select('venues.*', 'tags.*', 'categories.name')
        // ->get();

        // return ; 
       // $categories = Category::with('tags')->get();

        // from venue table which fiels you need
       // echo $venues[0]->name;
        //    exit;
        
       // return [$venues];
   
        // for($k=0; $k<count($venues); $k++){
        //     $data[$k]['name'][] = [$venues[$k]->name];
        //     $data[$k]['description'][] = [$venues[$k]->description];
        //     $data[$k]['tags'][] = $venues[$k]->tags;
        
        //     for($i=0; $i<count($venues[$k]->tags); $i++){
        //         $data[$k]['tags'][$i] = $venues[$k]->tags[$i]->category_id;       
        //         }
        // } 
        // return        
        //     echo "<pre>";
        //     $myData = getCategoryFromVenue($venues);       
        //     print_r($myData);
        //     echo "</pre>";
        // );
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
