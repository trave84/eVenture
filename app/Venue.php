<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $table = 'venues';
    protected $fillable = [
        'name', 'location', 'description', 
        'venue_type', 'night_type','music_type', 
        'budget',  'opening_time', 'closing_time',
        'cuisine', 'link', 'banner_img' 
    ];


    public function reviews()
    {
        return $this->belongsToMany('App\Review');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

}
