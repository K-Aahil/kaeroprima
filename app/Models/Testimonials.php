<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Testimonials extends Authenticatable
{
    use Notifiable;

    protected $guard = 'testimonials';

    protected $fillable = [
        'name', 'same_as_default', 'customer_position','customer_position_an', 'rating', 'testimoni','testimoni_an','image','status', 'created_at'
    ];
}
