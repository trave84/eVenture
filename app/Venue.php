<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $table = 'venues';
    protected $fillable = [
        'name', 'description', 
        'opening_time', 'closing_time',
        'link', 'banner_img' 
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
