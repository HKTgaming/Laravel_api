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

Route::get('/', 'HomeController@index');

Route::get('/details/{id}', 'PostController@show');
Route::get('/tim-kiem', 'HomeController@tim_kiem');

Auth::routes();

// Route::resource('category', 'Api\v1\CategoryPostController');
// Route::resource('blogs', 'Api\v1\BlogController');

Route::get('/admin', 'LoginController@index')->name('admin');
