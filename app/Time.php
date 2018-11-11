<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    public function venue(){
        $this->belongsTo('App\Venue');
    }
}
