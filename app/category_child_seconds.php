<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category_child_seconds extends Model
{
    protected $table='category_child_seconds';
    protected $fillable = [
        'id', 'category_id', 'type_property', 'address', 'project_name', 'land_area', 'floor', 'bedroom', 'bathroom', 
        'area_used', 'juridical', 'type_work', 'year_old', 'sex', 'certificate', 'foreign_anguage', 'position', 'job',
        'experience', 'level_salary', 'manufacture', 'color_item', 'new_percent_item', 'year_manufacture', 'manufacture_item',
        'fuel', 'model_line_item', 'expiration_date'
    ];

    public $timestamps = true;

    public function category()
    {
        return $this->belongsTo('App\categorys');
    }
}
