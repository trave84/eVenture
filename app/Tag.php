<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function venues(){
        return $this->belongsToMany('App\Venue', 'tag_venue');
    }
}
