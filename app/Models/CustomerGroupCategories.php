<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CustomerGroupCategories extends Authenticatable
{
    protected $table = 'customer_group_categories';
    protected $fillable = ['id', 'customer_group_id', 'category_id', 'discount', 'status'];
}
