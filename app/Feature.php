<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public function venues()
    {
        return $$this->hasMany('App\Venue');
    }
}
