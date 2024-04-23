<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class JobTitle extends Authenticatable
{
    use Notifiable;

    protected $guard = 'job_titles';

    protected $fillable = [
        'name','title','description','image','status', 'created_at'
    ];
}
