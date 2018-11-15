<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Venue;
use App\Tag;

class FilterController extends Controller
{
    public function findFilterMatch(Request $req)
    {
        $selectedTags = $req->selectedTags;

        $venues = Venue::query();

        foreach($selectedTags as $category => $tags){
            $venues->whereHas('tags', function($query) use($tags){
                $query->whereIn('tags.id', $tags);
            });
        }

        //return $venues->toSql();
        return $venues->with('tags')->get();
    }

    
}
