<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ImdbPerson;     // GET CONNECTION with MODEl 
use App\Venue;          // Venue Model

class PersonController extends Controller
{
    //
    
    public function suggest(Request $request)
    {
        $string = $request->input('s');

        
        $persons = ImdbPerson::where('fullname', 'LIKE', "%{$string}%")
            ->limit(100)
            ->orderBy('imdb_id')
            ->get();

        return $persons;
    }
}
