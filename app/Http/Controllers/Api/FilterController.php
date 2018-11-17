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
    {   // $array of selected
        $selectedTags = $req->selectedTags;
        // retrieving and assigning all the Query String Values:
        $venues = Venue::query();
        // $tagsJoint = Tag::join('tag_venue', 'tag.id', '=', 'tag_venue.tag_id');

        // key:selectedTags(key) => value:selectedTags(value)
        foreach($selectedTags as $category => $tags){
            // retrieve all venues WITH AT LEAST ONE TAG
            $venues->whereHas('tags', function($query) use($tags){
                // THAT HAS tagid from  $tags[]
                $query->whereIn('tags.id', $tags);  //Verifies: ('column_value' , IN , $array)
            });
        }
        // return $venues->toSql();
        // THEN GET() THE query results WITH(tags column)
        return $venues->with('tags')->get();
    }

    
}
