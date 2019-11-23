<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'address', 'category_id', 'product_id', 'customer_id', 'kg', 'price'
    ];
}
