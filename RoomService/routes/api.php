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

/*--- Products ---*/
Route::get('/products', 'ProductController@index');
Route::get('/products/{name}', 'ProductController@byName')->where('name', '[A-Za-z\s]+');
/*--- Products Singleton/CRUD ---*/
Route::get('/product/{id}', 'ProductController@show')->where('id', '[0-9]+');
Route::post('/product', 'ProductController@store');
Route::put('/product', 'ProductController@store');
Route::delete('/product/{id}', 'ProductController@destroy')->where('id', '[0-9]+');
/*--- Product Image, Filesystem I/O ---*/
Route::post('/product/image', 'ProductController@storeImage');

/*--- Distribution Centers ---*/
Route::get('/distribution_centers', 'DistributionCenterController@index');
Route::get('/distribution_centers/{name}', 'DistributionCenterController@byName')->where('name', '[A-Za-z\s]+');
Route::get('/distribution_centers/{product_id}', 'DistributionCenterController@index')->where('product_id', '[0-9]+');
Route::get('/distribution_centers/{product_id}/{name}', 'DistributionCenterController@byName')->where('name', '[A-Za-z\s]+', 'product_id', '[0-9]+');
/*--- Distribution Centers Singleton/CRUD ---*/
Route::get('/distribution_center/{id}', 'DistributionCenterController@show')->where('id', '[0-9]+');
Route::post('/distribution_center', 'DistributionCenterController@store');
Route::put('/distribution_center', 'DistributionCenterController@store');
Route::delete('/distribution_center/{id}', 'DistributionCenterController@destroy')->where('id', '[0-9]+');