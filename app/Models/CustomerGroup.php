<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CustomerGroup extends Authenticatable
{
    protected $table = 'customer_groups';
    protected $fillable = ['id', 'customer_group_id', 'name', 'email', 'address', 'phone', 'password', 'status'];
}
