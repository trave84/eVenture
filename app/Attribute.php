<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $table = 'attributes';

    public function venues()
    {
        return $$this->belongsToMany('App\Venue');
    }

    
}
