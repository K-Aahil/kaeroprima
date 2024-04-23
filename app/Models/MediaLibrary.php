<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class MediaLibrary extends Authenticatable
{
    use Notifiable;

    protected $guard = 'media_library';

    protected $table = 'media_library';

    protected $fillable = [
        'image','judul','format',
    ];
}
