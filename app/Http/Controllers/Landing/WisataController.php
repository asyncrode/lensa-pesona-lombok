<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Wisata;
use App\Detail_harga;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $wisata = Wisata::all();


        return view('landing.wisata', compact('wisata'));
    }
    public function detail($id)
    {
        $wisata = Wisata::all();
        $detail = Wisata::find($id);
        $detailH = Detail_harga::all();
        return view('landing.detail_wisata', compact('wisata', 'detail', 'detailH'));
    }
}
