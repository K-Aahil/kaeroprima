<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class MenuManagement extends Model
{
    use HasFactory;

    // use SoftDeletes;

    protected $table = 'admin_menus';

    protected $fillable = ['id', 'name'];

}
