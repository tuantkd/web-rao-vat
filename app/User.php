<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'id', 'level_id', 'fullname', 'username', 'email', 'verifyToken', 'verify',
        'password', 'sex', 'birthday', 'phone', 'address', 'number_money', 'avatar',
        'facebook_id', 'google_id', 'activation_token', 'slug'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = true;

    public function level()
    {
        return $this->belongTo('App\levels');
    }
}
