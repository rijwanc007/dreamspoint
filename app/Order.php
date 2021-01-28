<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
      'product_name',
      'product_qty',
      'product_price',
      'product_sub_total',
      'delivery',
      'status',
      'customer_name',
      'customer_phone',
      'customer_email',
      'customer_address',
    ];
}
