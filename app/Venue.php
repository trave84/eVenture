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

    public function features()
    {
        return $this->hasMany('App\Feature');
    }

    public function attributes()
    {
        return $this->hasMany('App\Attribute');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    
}
