<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class post_news extends Model
{
    protected $table = 'post_news';
    protected $fillable = [
        'id', 'post_type_id', 'user_id', 'category_id', 'district_id', 'title', 'price', 'currency', 'content', 'tag_search',
        'image', 'duration', 'hide_new', 'category_new', 'status'
    ];

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function district()
    {
        return $this->belongsTo('App\districts');
    }

    public function post_type()
    {
        return $this->belongsTo('App\post_type');
    }

    public function category()
    {
        return $this->belongsTo('App\categorys');
    }

    public function banner()
    {
        return $this->hasMany('App\banners');
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
