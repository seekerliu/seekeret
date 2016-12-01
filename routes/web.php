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

Route::get('/', 'IndexController@index');

Route::group(['prefix' => 'console'], function () {
    Route::get('home', 'HomeController@index');
    Route::get('seo', 'HomeController@seo');
    Route::put('seo', 'HomeController@updateSeo');

    Route::resource('categories', 'CategoryController');
    Route::get('categories/{category}/websites', 'CategoryController@websites');
    Route::resource('websites', 'WebsiteController');
});
