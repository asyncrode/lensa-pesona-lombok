<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antar extends Model
{
    protected $table = 'antar_jemputs';
    protected $fillable = [
        'id', 'dari', 'menuju', 'avanza', 'innova'
    ];
}
