<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class post_news extends Model
{
    protected $table = 'post_news';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'post_type_id', 'user_id', 'category_first_id', 'district_id', 'province_id',
        'title', 'price', 'unit_price', 'currency', 'content', 'tag_search',
        'images', 'number_date_expired', 'hidden_new', 'status', 'save_post', 'user_saved_id'
    ];

    public $timestamps = true;

    //Đăng tin thuộc người dùng
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //Đăng tin thuộc huyện và tỉnh
    public function district()
    {
        return $this->belongsTo('App\districts');
    }

    //Đăng tin thuộc loại tin
    public function post_type()
    {
        return $this->belongsTo('App\post_type');
    }

    //Đăng tin thuộc danh mục cấp 1
    public function category_child_firsts()
    {
        return $this->belongsTo('App\category_child_firsts');
    }

    //Đăng tin có nhiều sileder
    public function banner()
    {
        return $this->hasMany('App\banners');
    }
}
