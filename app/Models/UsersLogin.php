<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UsersLogin extends Authenticatable
{
    use Notifiable;

    protected $table = 'userslogin'; // Nombre de tu tabla

    protected $fillable = [
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
