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
        Route::put('/update/{id}', 'Admin\FotoController@update')->name('foto.admin.update');
        Route::delete('/delete/{id}', 'Admin\FotoController@delete')->name('foto.admin.delete');
    });
});
