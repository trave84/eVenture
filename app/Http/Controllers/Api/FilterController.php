<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Venue;
use App\Tag;

class FilterController extends Controller
{
    public function postSearch(Request $req)
    {

        $requested_tags = $req;

        // create response
        console.log($requested_tags);
    }

    public function showResults(Request $req)
    {

        $req->tags()->find([
            'selected_tags' => $req->selected,
        ]);

        // create response
    }

}
