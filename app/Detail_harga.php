<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_harga extends Model
{
    protected $table = 'detail_hargas';
    protected $fillable = [
        'id', 'id_wisata', 'jmlPeseta', 'hrgTour', 'hrgTourHotel'
    ];
    public function wisata(){
        return $this->belongsTo(Wisata::class);
    }
}
