<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model {

    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'image', 'province_id', 'city_id', 'subdistrict_id', 'detail_address', 'status'];

}
