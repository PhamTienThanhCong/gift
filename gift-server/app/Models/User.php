<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable 
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'userName',
        'email',
        'birthday',
        'password',
        'fullName',
        'phone',
        'confirmed',
        'banned',
        'themeLanding',
        'accessToken',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
