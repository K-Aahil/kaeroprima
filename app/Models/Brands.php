<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Brands extends Authenticatable
{
    protected $table = 'brands';
    protected $fillable = ['id', 'name', 'image', 'status', 'created_at', 'updated_at'];
}
