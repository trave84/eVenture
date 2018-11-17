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
    {   // CAN NOT BE 'hasMany' FOR: otherwise HTTP POST Response fails on 500 (SQL Unknown Column)
        return $this->belongsToMany('App\Tag');
    }

    // public function tags(){
    //     return $this->hasManyThrough('App\Tag','App\Category');
    // }

}
