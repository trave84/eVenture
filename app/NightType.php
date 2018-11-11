<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NightType extends Model
{
    public function venues(){
        $this->belongsToMany('App\Venue');
    }
}
