<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VenueType extends Model
{
    public function venues(){
        $this->belongsToMany('App\Venue');
    }
}
