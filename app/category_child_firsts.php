<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category_child_firsts extends Model
{
    protected $table='category_child_firsts';
    protected $fillable = [
        'id', 'category_id', 'category_child_name'
    ];

    public $timestamps = true;

    public function category()
    {
        return $this->belongsTo('App\categorys');
    }
}
