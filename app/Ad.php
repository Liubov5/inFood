<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = [
        'seller_id', 'region_id', 'delivery_id', 'category_id', 'product_id', 'kg', 'price'
    ];
}
