<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Wisata;
use App\Foto;
use App\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $wisata = Wisata::all();
        $foto = Foto::all()->take(6);
        $new = Blog::all()->sortByDesc('created_at')->first();
        $blog = Blog::all()->take(3)->sortByDesc('created_at');

        return view('landing.home', compact('wisata', 'foto', 'blog', 'new'));
    }
}
