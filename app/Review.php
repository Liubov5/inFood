<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable = [
        'review', 'stars', 'customer_id', 'seller_id', 'product_id'
    ];
}
