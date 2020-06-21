<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class category_child_firsts extends Model
{
    protected $table = 'category_child_firsts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'category_id', 'category_child_name'
    ];

    public $timestamps = true;

    //Danh mục cấp 1 thuộc danh mục cấp cha
    public function category()
    {
        return $this->belongsTo('App\categorys');
    }

    //Danh mục cấp 1 có nhiều danh mục cấp 2
    public function category_child_second()
    {
        return $this->hasMany('App\category_child_seconds');
    }

    //Danh mục cấp 1 có nhiều bài đăng tin
    public function post_news()
    {
        return $this->hasMany('App\post_news');
    }
}
