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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PageController@index');
Route::get('/home', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/services', 'PageController@services');

// PUBLIC ACCESS:
// Route::get('/', 'PublicController@index');
Route::get('/public', 'PublicController@index');
Route::get('/venues', 'VenueController@index');
Route::get('/venue/{id}/show', 'VenueController@show')->name('venue.show');


// ADMIN ACCESS: 
Route::get('/admin/venue/create', 'VenueController@create');
Route::get('/admin/venue/{id}/edit', 'VenueController@edit')->name('venue.edit');

Route::post('/admin/venue/{id}/update', 'VenueController@update');
Route::post('/admin/venue/store', 'VenueController@store');

Route::get('/features', 'FeatureController@index');


// USER ACCESS:
Route::get('/user', 'UserController@index');

Route::resource('reviews', 'ReviewController');
