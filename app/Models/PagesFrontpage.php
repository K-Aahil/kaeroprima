<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PagesFrontpage extends Authenticatable
{
    use Notifiable;

    protected $guard = 'pages_frontpage';

    protected $table = 'pages_frontpage';

    protected $fillable = [
         'url_media',
    ];
}
