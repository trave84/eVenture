<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public function venues()
    {
        return $$this->belongsToMany('App\Venue');
    }

    public function category()
    {
        return $$this->belongsTo('App\Category');
    }
}
