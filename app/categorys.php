<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class categorys extends Model
{
    protected $table = 'categorys';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'category_name', 'slug'
    ];

    public $timestamps = true;


    public function category_child_first()
    {
        return $this->hasMany('App\category_child_firsts');
    }

    public function category_child_second()
    {
        return $this->hasMany('App\category_child_seconds');
    }

    public function post_new()
    {
        return $this->hasMany('App\post_news');
    }
}
