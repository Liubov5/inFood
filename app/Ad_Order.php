<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad_Order extends Model
{
    protected $fillable = [
        'ad_id', 'order_id', 'price', 'status'
    ];
}
