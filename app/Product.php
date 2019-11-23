<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'product', 'category_id'
    ];
    public function ads(){
    	return $this->hasMany('App\Ad');
    }
     public function orders(){
    	return $this->hasMany('App\Order');
    }
}
