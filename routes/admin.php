<?php

// use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
// use Symfony\Component\Routing\Route as ComponentRoutingRoute;


Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
    Route::get('/', 'Admin\AdminLoginController@index');
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');


    Route::group(['prefix' => 'wisata'], function () {
        Route::get('/', 'Admin\WisataController@index')->name('wisata.admin.index');
        Route::post('/store', 'Admin\WisataController@store')->name('wisata.admin.store');
        Route::get('/getWisata', 'Admin\WisataController@getWisata')->name('wisata.admin.data');
        Route::get('/edit/{id}', 'Admin\WisataController@edit')->name('wisata.admin.edit');
        Route::put('/update/{id}', 'Admin\WisataController@update')->name('wisata.admin.update');
        Route::delete('/delete/{id}', 'Admin\WisataController@delete')->name('wisata.admin.delete');
    });
    Route::group(['prefix' => 'detail'], function () {
        Route::get('/', 'Admin\DetailController@index')->name('detail.admin.index');
        Route::post('/store', 'Admin\DetailController@store')->name('detail.admin.store');
        Route::get('/getDetail', 'Admin\DetailController@getDetail')->name('detail.admin.data');
        Route::get('/getWisata', 'Admin\DetailController@getWisata')->name('detail.admin.wisata');
        Route::get('/edit/{id}', 'Admin\DetailController@edit')->name('detail.admin.edit');
        Route::put('/update/{id}', 'Admin\DetailController@update')->name('detail.admin.update');
        Route::delete('/delete/{id}', 'Admin\DetailController@delete')->name('detail.admin.delete');
    });
    Route::group(['prefix' => 'sewa'], function () {
        Route::get('/', 'Admin\SewaController@index')->name('sewa.admin.index');
        Route::post('/store', 'Admin\SewaController@store')->name('sewa.admin.store');
        Route::get('/getSewa', 'Admin\SewaController@getSewa')->name('sewa.admin.data');
        Route::get('/edit/{id}', 'Admin\SewaController@edit')->name('sewa.admin.edit');
        Route::put('/update/{id}', 'Admin\SewaController@update')->name('sewa.admin.update');
        Route::delete('/delete/{id}', 'Admin\SewaController@delete')->name('sewa.admin.delete');
    });
    Route::group(['prefix' => 'area'], function () {
        Route::get('/', 'Admin\AreaController@index')->name('area.admin.index');
        Route::post('/store', 'Admin\AreaController@store')->name('area.admin.store');
        Route::get('/getArea', 'Admin\AreaController@getArea')->name('area.admin.data');
        Route::get('/edit/{id}', 'Admin\AreaController@edit')->name('area.admin.edit');
        Route::put('/update/{id}', 'Admin\AreaController@update')->name('area.admin.update');
        Route::delete('/delete/{id}', 'Admin\AreaController@delete')->name('area.admin.delete');
    });
    Route::group(['prefix' => 'antar'], function () {
        Route::get('/', 'Admin\AntarController@index')->name('antar.admin.index');
        Route::post('/store', 'Admin\AntarController@store')->name('antar.admin.store');
        Route::get('/getAntar', 'Admin\AntarController@getAntar')->name('antar.admin.data');
        Route::get('/edit/{id}', 'Admin\AntarController@edit')->name('antar.admin.edit');
        Route::put('/update/{id}', 'Admin\AntarController@update')->name('antar.admin.update');
        Route::delete('/delete/{id}', 'Admin\AntarController@delete')->name('antar.admin.delete');
    });
    Route::group(['prefix' => 'foto'], function () {
        Route::get('/', 'Admin\FotoController@index')->name('foto.admin.index');
        Route::post('/store', 'Admin\FotoController@store')->name('foto.admin.store');
        Route::get('/getFoto', 'Admin\FotoController@getFoto')->name('foto.admin.data');
        Route::get('/edit/{id}', 'Admin\FotoController@edit')->name('foto.admin.edit');
        Route::post('/update/{id}', 'Admin\FotoController@update')->name('foto.admin.update');
        Route::delete('/delete/{id}', 'Admin\FotoController@delete')->name('foto.admin.delete');
    });
    Route::group(['prefix' => 'video'], function () {
        Route::get('/', 'Admin\VideoController@index')->name('video.admin.index');
        Route::post('/store', 'Admin\VideoController@store')->name('video.admin.store');
        Route::get('/getVideo', 'Admin\VideoController@getVideo')->name('video.admin.data');
        Route::get('/edit/{id}', 'Admin\VideoController@edit')->name('video.admin.edit');
        Route::post('/update/{id}', 'Admin\VideoController@update')->name('video.admin.update');
        Route::delete('/delete/{id}', 'Admin\VideoController@delete')->name('video.admin.delete');
    });
    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'Admin\BlogController@index')->name('blog.admin.index');
        Route::post('/store', 'Admin\BlogController@store')->name('blog.admin.store');
        Route::get('/getBlog', 'Admin\BlogController@getBlog')->name('blog.admin.data');
        Route::get('/edit/{id}', 'Admin\BlogController@edit')->name('blog.admin.edit');
        Route::post('/update/{id}', 'Admin\BlogController@update')->name('blog.admin.update');
        Route::delete('/delete/{id}', 'Admin\BlogController@delete')->name('blog.admin.delete');
    });
});
