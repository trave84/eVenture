<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{   
    public function photo() {
        $this->belongsTo('App\Venue');
    }
}
