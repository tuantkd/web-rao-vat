<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post_news extends Model
{
    protected $table='post_news';
    protected $fillable = [
        'id', 'post_type_id', 'user_id', 'category_id', 'province_id', 'title', 'price', 'currency', 'content', 'tag_search',
        'image', 'duration', 'hide_new', 'category_new', 'status'
    ];

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function province()
    {
        return $this->belongsTo('App\province');
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
}
