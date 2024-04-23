<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Banners extends Authenticatable
{
    use Notifiable;

    protected $guard = 'banners';

    protected $fillable = [
        'title', 'caption', 'description', 'same_as_default', 'title_an', 'caption_an', 'description_an', 'show_button', 'button_text', 'button_url', 'status', 'image', 'created_at'
    ];

}
