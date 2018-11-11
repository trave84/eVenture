<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuisine extends Model
{
    public function venues(){
        $this->belongsToMany('App\Venue');
    }
}
