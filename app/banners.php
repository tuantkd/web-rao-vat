<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banners extends Model
{
    protected $table='banners';
    protected $fillable = [
        'id', 'post_id', 'title', 'image'
    ];

    public $timestamps = true;

    public function post_new()
    {
        return $this->belongsTo('App\post_news');
    }
}
