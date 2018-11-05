<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    public $primaryKey = 'id';

    public  function user(){
        $this->belongsTo('App\User');
    }

    public  function venue(){
        $this->belongsTo('App\Venue');
    }

}
