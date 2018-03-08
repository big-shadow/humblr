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

// This returns the Administrative Vue.js website for business owners.
Route::domain('{subdomain}.administration.' . env("APP_DOMAIN"))->group(function () {
    Route::get('/{page?}', 'UI\UIController@adminSite')->where('page', '.*')->name('administration');
});

// This returns the e-Comm/CMS Vue.js website for end users.
Route::domain('{subdomain}.' . env("APP_DOMAIN"))->group(function () {
    Route::get('/{page?}', 'UI\UIController@userSite')->where('page', '.*');
});

/*
 * Below are our basic web URLs
 * These are for the platform's own marketing pages and so on.
 * The registration URLs are to get business owners signed up for a subdomain.
 */
Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

/*
 * Form consuming web routes with redirects.
 */
Route::post('register', [
    'uses' => 'Auth\RegisterController@registerAdminWithNewVenue'
]);

