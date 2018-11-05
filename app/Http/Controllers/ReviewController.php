<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;     
use App\Feature;     
use App\Attribute;     
use App\User;
use App\Venue;

class ReviewController extends Controller
{
    /**
      * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // DO I STILL NEED TO USE 'App\Venue' is RELATIONSHIP IS SET UP ?? 
        $venues = Venue::all();   
        $reviews = Review::orderBy('created_at', 'desc')->paginate(2);

        return view('reviews.index', compact(['venues', 'reviews']));        

    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reviews = Review::all();
        $attributes = Attribute::all();
        $features = Feature::all();

        return view('reviews.create')->with(compact(['review', 'attributes', 'features']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required|max:255','mood'=>'required', 'energy'=>'required'
            ]);

        $attribute = new Attribute();
        $attribute->title = $request->title;
        $attribute->mood = $request->mood;
        $attribute->energy = $request->energy;
        
        $attribute->save();
        Session::flash('success', 'New review was successfully added.');

        return redirect()->route('reviews.index'); 


    }

    public function getSingle($slug){
        $reviews = Venue::where('slug', '=', $slug)->first();
        
        return view('reviews.single')->withReview($review);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)       //FINDREVIEW: by url/{id}
    {
        $users = User::all();
        $review = Review::findOrFail($id);

        return view('reviews.show', compact(['review']));   //PASSTO: show.template

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
