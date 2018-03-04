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

Route::domain('{subdomain}.admin.' . env("APP_DOMAIN"))->group(function () {
    Route::get('/', function () {
        return view('admin.config');
    });
});

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('register', [
    'uses' => 'Auth\RegisterController@create'
]);

