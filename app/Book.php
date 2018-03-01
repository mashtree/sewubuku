<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ["reader_id","title","review","author","publisher","get_from","rating","varchar"];

    public function comments(){
    	return $this->hasMany('App\Comment');

    }

    public function readers(){
    	$this->belongsTo('App\Reader');
    }

}
