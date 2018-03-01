<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ["book_id","reader_id","comment","review_rating"];

    public function books(){
    	return $this->belongsTo('App\Book');
    }

    public function readers(){
    	return $this->belongsTo('App\Reader');
    }
}
