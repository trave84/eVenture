<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name', 'category'
    ];

    public function venues(){
        return $this->belongsToMany('App\Venue');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
