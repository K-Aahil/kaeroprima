<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Orders extends Authenticatable
{
    protected $table = 'orders';
    protected $fillable = ['id', 'customer_id', 'invoice_number', 'status', 'transaction_date', 'discount', 'total', 'note', 'name', 'email', 'phone', 'old_total', 'customer_email'];
}
