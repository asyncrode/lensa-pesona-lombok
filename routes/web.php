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

Route::get('/', 'Landing\HomeController@index')->name('home');

Route::get('/profil', 'Landing\ProfileController@index')->name('profil');

Route::get('/wisata', 'Landing\WisataController@index')->name('wisata');
Route::get('/detail-wisata/{id}', 'Landing\WisataController@detail')->name('d-wisata');

Route::get('/blogs', 'Landing\BlogController@index')->name('blog');
Route::get('/detail-blog/{id}', 'Landing\BlogController@detail')->name('d-blog');

Route::get('/sewa-mobil', 'Landing\SewaController@index')->name('sewa');

Route::get('/galeri', 'Landing\GaleriController@index')->name('galeri');
