<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	protected $fillable = ['user_id', 'product_id', 'content', 'date_time'];

    public function product(){
    	return $this->belongsTo('App\Product');
    }
}
