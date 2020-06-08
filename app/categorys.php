<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorys extends Model
{
    protected $table='categorys';
    protected $fillable = [
        'id', 'category_name'
    ];

    public $timestamps = true;

    public function category_child_first(){
        return $this->hasMany('App\category_child_firsts');
    }

    public function category_child_second(){
        return $this->hasMany('App\category_child_seconds');
    }

    public function post_new(){
        return $this->hasMany('App\post_news');
    }
}
