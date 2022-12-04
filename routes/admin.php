<?php

// use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
// use Symfony\Component\Routing\Route as ComponentRoutingRoute;


Route::group(['prefix' => 'admin'], function () {    
    Auth::routes();
    Route::get('/', 'Admin\AdminLoginController@index');
    Route::get('/dashboard', 'Admin\DashboardController@index');

});