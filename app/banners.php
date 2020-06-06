<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banners extends Model
{
    protected $table='banners';
    protected $fillable = [
        'id', 'title', 'image'
    ];

    public $timestamps = true;

}
