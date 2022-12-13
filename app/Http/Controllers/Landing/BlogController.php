<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blog = Blog::all();

        return view('landing.blog', compact('blog'));
    }
}
