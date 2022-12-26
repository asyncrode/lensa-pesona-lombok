<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'area_khususes';
    protected $fillable = [
        'id', 'area', 'biayaA', 'biayaI', 'biayaH'
    ];
}
