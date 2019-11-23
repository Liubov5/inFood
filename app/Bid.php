<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $fillable = [
        'ad_id', 'order_id', 'price', 'status'
    ];
     public function ad(){
    	return $this->belongsTo('App\Ad');
    }
 	public function order(){
    	return $this->belongsTo('App\Order');
    }
}
