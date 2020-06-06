<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class levels extends Model
{
    protected $table='levels';
    protected $fillable = [
        'id', 'name_level', 'discribe'
    ];

    public $timestamps = true;

    public function user(){
        return $this->hasMany('App\User');
    }
}
