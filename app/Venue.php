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
        return $this->hasMany('App\Feature', 'feature_venue', 'venue_id', 'feature_id');
    }

    public function attributes()
    {
        return $this->hasMany('App\Attribute', 'attribute_venue', 'venue_id', 'attribute_id');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review', 'review_venue', 'venue_id', 'review_id');
    }

    public function tags()
    {
        return $this->hasMany('App\Tag', 'tag_venue', 'venue_id', 'tag_id');
    }

    
}
