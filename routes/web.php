<?php

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

// NAVBAR PAGES:
Route::get('/', 'PageController@index');
Route::get('/home', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/services', 'PageController@services');

// PUBLIC ACCESS:
// Route::get('/', 'PublicController@index');
Route::get('/public', 'PublicController@index');
Route::get('/venues', 'VenueController@index');
Route::get('/venue/show/{id}', 'VenueController@show')->name('venue.show');


// VENUES ACCESS: 
Route::get('/venue/create', 'VenueController@create');
Route::get('/venues/edit/{id}', 'VenueController@edit')->name('venue.edit');

Route::post('/venue/update/{id}', 'VenueController@update');
Route::post('/venue/store', 'VenueController@store');

//FEATURES ACCESS:
Route::get('/features', 'FeatureController@index');

// ATTRIBUTES ACCESS:

// REVIEW ACCESS:

//GEOCODE:
Route::get('/mygeocode', function(){
  return view('mygeocode.index');
});

Route::get('/googlemap', function(){
  return view('googlemap.index');
});


// USER ACCESS:
Route::get('/user', 'UserController@index');
Route::resource('reviews', 'ReviewController');
