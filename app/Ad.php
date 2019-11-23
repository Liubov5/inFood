<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = [
        'seller_id', 'region_id', 'delivery_id', 'category_id', 'product_id', 'kg', 'price'
    ];

    public function seller(){
    	return $this->belongsTo('App\Seller');
    }
    public function region(){
    	return $this->belongsTo('App\Region');
    }
    public function delivery(){
    	return $this->belongsTo('App\Delivery');
    }
    public function category(){
    	return $this->belongsTo('App\Category');
    }
     public function product(){
    	return $this->belongsTo('App\Product');
    }
    public function bids(){
        return $this->hasMany('App\Bid');
    }
}
