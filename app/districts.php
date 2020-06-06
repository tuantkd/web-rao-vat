<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class districts extends Model
{
    protected $table='districts';
    protected $fillable = [
        'id', 'province_id', 'province_name'
    ];

    public $timestamps = true;

    public function provinces()
    {
        return $this->belongsTo('App\province');
    }
}
