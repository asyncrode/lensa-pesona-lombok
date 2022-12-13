<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_harga extends Model
{
    protected $table = 'detail_hargas';
    protected $fillable = [
        'id', 'wisata_id', 'jmlPeseta', 'hrgTour', 'hrgTourHotel'
    ];
    public function wisata(){
        return $this->belongsTo(Wisata::class);
    }
}
