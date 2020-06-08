<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table='news';
    protected $fillable = [
        'id', 'title', 'image', 'content'
    ];

    public $timestamps = true;
}
