<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customers extends Authenticatable
{
    use Notifiable;

    protected $guard = 'customers';

    protected $fillable = [
        'customer_group_id', 'name', 'email', 'address', 'phone', 'password', 'status', 'image',
    ];

    protected $hidden = [
        'remember_token',
    ];
}
