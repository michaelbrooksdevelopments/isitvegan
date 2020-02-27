<?php

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

//Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index');
Route::get('/category/{slug}', 'CategoryController@show');
Route::get('/search', 'ProductController@search');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/{slug}', 'ProductController@index');
