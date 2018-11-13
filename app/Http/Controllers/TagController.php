<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Category;       // to be able to <select-option>
use App\Venue;

class TagController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');  //->only('index')
    }

    public function getResults(Request $req){
        $locations = [];
        $locations = $req->input('Location');
        
        var_dump($locations);
    }

    

    public function index()
    {
        // $tags = Tag::all();
        $categories = Category::all();

        return view('tags.index', compact('categories'));
    }

    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        
        return view('tags.create', compact('tags', 'categories'));
    }

    // Form action 
    public function store(Request $request)
    {
        $tag = Tag::create($request->all());

        return redirect (action('TagController@index'));


        // $this->validate($request, array('name' => 'required|max:255'));
        // $tag = new Tag;

        // $tag->name = $request->name;
        // $tag->save();

        // Session::flash('success', 'New tag was successfully created!');

        // return redirect()->route('tags.index');
    }

    public function show($id)
    {
        $tag = Tag::findOrFail($id);

        return view('tags.show', compact('tag'));
    }

    public function edit($id)
    {
        $tag = Venue::findOrFail($id);
        
        return view('venues.edit')->withTags($tags);

    }

    public function update(Request $request, $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->update($request->all());

        return redirect (action('TagController@index'));

    }

    public function destroy($id)
    {
        $tag = Venue::findOrFail($id);
        $tag->delete();

        return redirect (action('TagController@index'));
    }

    // public function postSearch(Request $request)
    // {
    //     $search_results = ;

    //     return ;
    // }
    public function filter_results()
    {
        return view('filter.index');
    }

}
