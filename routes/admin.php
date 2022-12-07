<?php

// use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
// use Symfony\Component\Routing\Route as ComponentRoutingRoute;


Route::group(['prefix' => 'admin'], function () {    
    Auth::routes();
    Route::get('/', 'Admin\AdminLoginController@index');
    Route::get('/dashboard', 'Admin\DashboardController@index');


    Route::group(['prefix' => 'wisata'], function () {
        Route::get('/', 'Admin\WisataController@index')->name('wisata.admin.index');
        Route::post('/store', 'Admin\WisataController@store')->name('wisata.admin.store');
        Route::get('/getWisata', 'Admin\WisataController@getWisata')->name('wisata.admin.data');
        Route::get('/edit/{id}', 'Admin\WisataController@edit')->name('wisata.admin.edit');
        Route::put('/update/{id}', 'Admin\WisataController@update')->name('wisata.admin.update');
        Route::delete('/delete/{id}', 'Admin\WisataController@delete')->name('wisata.admin.delete');
    });

});
