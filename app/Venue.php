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

    public function attributes()
    {
        return $this->belongsToMany('App\Attribute');
    }

    public function venuetype()
    {
        return $this->belongsTo('App\VenueType');
    }

    public function nighttype()
    {
        return $this->belongsTo('App\NightType');
    }

    public function features()
    {
        return $this->belongsToMany('App\Feature');
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function times()
    {
        return $this->hasToMany('App\Time');
    }

    public function musictype()
    {
        return $this->belongsTo('App\MusicType');
    }

    public function cuisine()
    {
        return $this->belongsTo('App\Cuisine');
    }
    
    public function reviews()
    {
        return $this->belongsToMany('App\Review');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

}
