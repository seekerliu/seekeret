<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'console'], function () {
    Route::get('home', 'HomeController@index');
    Route::resource('categories', 'CategoryController');
    Route::get('categories/{category}/websites', 'CategoryController@websites');
    Route::resource('websites', 'WebsiteController');
    Route::get('frequentlyUsedWebsites', 'WebsiteController@frequentlyUsedWebsites');
});