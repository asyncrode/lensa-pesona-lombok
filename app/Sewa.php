<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    protected $table = 'sewas';
    protected $fillable = [
        'id', 'jenis', 'kapasitas', 'tarif', 'overtime'
    ];
}
