<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //
    protected $fillable = [
        'region'
    ];

    public function ads(){
    	return $this->hasMany('App\Ad');
    }
}
