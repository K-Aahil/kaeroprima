<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AboutUs extends Authenticatable
{
    use Notifiable;

    protected $guard = 'about_us';

    protected $table = 'about_us';

    protected $fillable = [
         'description', 'side_description', 'goal_description', 'image', 'status',
    ];
}
