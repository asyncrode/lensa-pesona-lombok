<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as ComponentRoutingRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing.home');
})->name('home');

Route::get('/wisata', function () {
    return view('landing.wisata');
})->name('wisata');
Route::get('/detail-wisata', function () {
    return view('landing.detail_wisata');
})->name('d-wisata');
Route::get('/blog', function () {
    return view('landing.blog');
})->name('blog');
Route::get('/detail-blog', function () {
    return view('landing.detail_blog');
})->name('d-blog');
Route::get('/sewa-mobil', function () {
    return view('landing.sewa');
})->name('sewa');
Route::get('/galeri', function () {
    return view('landing.galeri');
})->name('galeri');
Route::get('/admin', function () {
    return view('admin.login');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/sewa', function () {
    return view('admin.sewa');
});
