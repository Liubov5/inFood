<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category'
    ];
     public function ads(){
    	return $this->hasMany('App\Ad');
    }

    public function orders(){
    	return $this->hasMany('App\Order');
    }
}
