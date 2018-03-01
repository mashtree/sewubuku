<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    protected $fillable = ["reg_number","name","location","phone","photo"];

    public function books(){
    	return $this->hasMany('App\Book');
    }

    public function comments(){
    	return $this->hasMany('App\Comment');
    }
}
