<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class category_child_seconds extends Model
{
    protected $table = 'category_child_seconds';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'category_first_id',
        'estate_category', 'estate_address', 'estate_name_project', 'estate_land_area',
        'estate_floor', 'estate_bedroom', 'estate_bathroom', 'estate_area_used', 'estate_juridical',
        'car_color', 'car_version', 'car_origin', 'car_produce_name', 'car_model_name', 'car_register_year', 'car_category',
        'car_number_kilometer', 'car_fuel',
        'electron_manufacturer', 'electron_model_machine', 'electron_color', 'electron_status',
        'work_type', 'work_old', 'work_sex', 'work_certificate', 'work_foreign_language', 'work_position', 'work_job',
        'work_experience', 'work_salary_level',
        'food_origin', 'food_expiration',
        'refrigerator_status', 'refrigerator_manufacturer',
        'furniture_status',
        'fashion_status', 'fashion_type_product',
        'sport_status',
        'office_furniture_status',
        'service_type_work', 'service_experience_work',
        'mom_baby_status', 'mom_baby_type_product'
    ];

    public $timestamps = true;

    //Danh mục cấp hai thuộc danh mục cấp 1
    public function category_child_firsts()
    {
        return $this->belongsTo('App\category_child_firsts');
    }
}
