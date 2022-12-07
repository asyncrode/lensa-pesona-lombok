<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table = 'wisatas';
    protected $fillable = [
        'id', 'nama', 'harga', 'tujuan', 'deskripsi'
    ];
}
