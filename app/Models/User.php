<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable // Ensure you are extending Authenticatable
{
    use Notifiable;

    // Define your fillable and hidden fields here
    protected $fillable = ['username', 'password', 'sec_pwd', 'user_type'];
    protected $hidden = ['password', 'sec_pwd', 'remember_token'];
}



