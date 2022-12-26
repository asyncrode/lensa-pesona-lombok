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
        $blog = Blog::all()->sortByDesc('created_at');

        return view('landing.blog', compact('blog'));
    }
    public function detail($id)
    {
        $blog = blog::all();
        $detail = blog::find($id);
        return view('landing.detail_blog', compact('blog', 'detail'));
    }
}
