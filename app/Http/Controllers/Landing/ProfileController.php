<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Wisata;
use App\Foto;
use App\Blog;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('landing.profile');
    }
}
