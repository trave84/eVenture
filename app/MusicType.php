<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicType extends Model
{
    public function venues(){
        $this->belongsToMany('App\Venue');
    }
}
