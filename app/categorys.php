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

    //Danh mục cha có nhiều danh mục cấp 1
    public function category_child_first()
    {
        return $this->hasMany('App\category_child_firsts');
    }
}
