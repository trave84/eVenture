<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name', 'category'
    ];

    protected $hidden=['category_id','created_at', 'updated_at'];

    public function venues(){
        return $this->belongsToMany('App\Venue');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
