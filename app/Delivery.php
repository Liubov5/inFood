<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    //
    protected $fillable = [
        'delivery'
    ];
    public function ads(){
    	return $this->hasMany('App\Ad');
    }
}
