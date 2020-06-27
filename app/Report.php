<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';
    protected $fillable = [
        'id', 'post_new_id', 'report_name', 'username', 'email'
    ];

    public $timestamps = true;

    public function postNew(){
        return $this->belongsTo('App\post_news');
    }
    
}
