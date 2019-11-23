<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'address', 'category_id', 'product_id', 'customer_id', 'kg', 'price'
    ];

     public function category(){
    	return $this->belongsTo('App\Category');
    }
    public function product(){
    	return $this->belongsTo('App\Product');
    }
    public function customer(){
    	return $this->belongsTo('App\Customer');
    }
    public function bids(){
        return $this->hasMany('App\Bid');
    }
}
