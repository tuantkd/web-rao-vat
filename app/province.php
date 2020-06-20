<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class province extends Model
{
    protected $table = 'provinces';
    protected $fillable = [
        'id', 'province_name'
    ];

    public $timestamps = true;

    public function district()
    {
        return $this->hasMany('App\districts');
    }

    public function post_new()
    {
        return $this->hasMany('App\post_news');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
