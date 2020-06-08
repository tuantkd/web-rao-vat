<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table='users';
    protected $fillable = [
        'id', 'level_id', 'fullname', 'username', 'email', 'verifyToken', 'verify', 'password', 'sex', 'birthday', 'phone',
        'address', 'number_money'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = true;

    public function level(){
        return $this->belongTo('App\levels');
    }
}
