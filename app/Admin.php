<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admins';

    protected $guard = 'admin';

    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
