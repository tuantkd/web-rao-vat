<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'id', 'title', 'title_short', 'image', 'content'
    ];

    public $timestamps = true;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
