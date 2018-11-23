<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('getHome');
    }

    public function index(){
        $title = 'Welcome to eVenture';
        return view('pages.index', compact('title'));
        // return view('pages.index')->with('title', $title);
    }

    public function indexOld(){
        $title = 'Welcome to eVenture';
        return view('pages.index-old', compact('title'));
        // return view('pages.index')->with('title', $title);
    }


    // public function getHome()
    // {
    //     return view('home');
    // }
    
    public function getAbout(){
        $first = 'Arpad';
        $last = 'Kajari';

        $full_name = $first . " " . $last;
        $email = 'a.kajari@yahoo.com';
        
        $data = [];
        $data ['full_name'] = $full_name; 
        $data['email'] = $email; 

        return view('pages.about')->withData($data);
    }
 
    public function getServices(){
        $data = array(
            'title' => 'Services',
            'services' => ['Bars', 'Clubs', 'Resturants']
        );
        return view('pages.services')->with($data);
    }

    public function getContact(){
        return view('pages.contact');
    }
}
