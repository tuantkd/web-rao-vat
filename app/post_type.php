<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class post_type extends Model
{
    protected $table = 'post_types';
    protected $fillable = [
        'id', 'post_type_name'
    ];

    public $timestamps = true;

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
