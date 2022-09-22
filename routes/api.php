<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
route::resource('/','HomeController@index');

// route::get('/customer','CustomerController@index');
// route::resource('customer','CustomerController');
// route::resource('customer','CustomerController')->only(['edit','create','show']);//chỉ sử dụng các phương thức trên
// route::resource('customer','CustomerController')->except(['index','show','update','delete','store']);//không sử dụng các phương thức trên

// route::resource('v1/customer','Api\v1\CustomerController');
Route::prefix('v1')->group(function(){
    Route::resource('customer', 'Api\v1\CustomerController')->only(['show','update','delete','store']);
   
    Route::resource('category', 'Api\v1\CategoryPostController');
   
    Route::resource('customer', 'Api\v1\CustomerController')->only(['show','update','delete','store']);
});

Route::prefix('v2')->group(function(){
    Route::resource('customer', 'Api\v2\CustomerController')->only(['show']);
});