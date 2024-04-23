<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pages extends Authenticatable
{
    use Notifiable;

    protected $guard = 'pages';

    protected $fillable = [
        'title', 'description', 'slug','same_as_default', 'meta_title', 'title_an', 'caption_an', 'description_an', 'meta_description', 'status', 'image', 'url_media',
    ];

}
