<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = 'Welcome to eVenture';
        return view('pages.index', compact('title'));
        // return view('pages.index')->with('title', $title);
    
    }

    public function getAbout(){
        return view('pages.about');
    }
    
    public function getServices(){
        $data = array(
            'title' => 'Services',
            'services' => ['Bars', 'Clubs', 'Resturants']
        );
        return view('pages.services')->with($data);
    }
}
