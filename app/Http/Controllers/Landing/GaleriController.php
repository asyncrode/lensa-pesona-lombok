<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Foto;
use App\Video;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $foto = Foto::all();
        $video = Video::all();

        return view('landing.galeri', compact('foto', 'video'));
    }
}
