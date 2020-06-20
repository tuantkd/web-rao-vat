<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class levels extends Model
{
    protected $table = 'levels';
    protected $fillable = [
        'id', 'name_level', 'discribe'
    ];

    public $timestamps = true;

    public function user()
    {
        return $this->hasMany('App\User');
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
