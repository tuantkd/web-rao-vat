<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class districts extends Model
{
    protected $table = 'districts';
    protected $fillable = [
        'id', 'province_id', 'province_name'
    ];

    public $timestamps = true;

    public function provinces()
    {
        return $this->belongsTo('App\province');
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
