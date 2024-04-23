<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class OrderItems extends Authenticatable
{
    protected $table = 'order_items';
    protected $fillable = ['id', 'order_id', 'product_id', 'product_variant_id', 'quantity', 'price', 'discount_product', 'noted'];
}
