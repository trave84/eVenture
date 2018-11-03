<?php
//Example:  Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// USER ACCESS:
Route::get('/user', 'UserController@index');

// PAGES:
Route::get('/', 'PageController@index');
Route::get('/home', 'PageController@home');

Route::get('/venues', 'VenueController@show');
Route::get('/contact', 'PageController@getContact');
Route::post('/contact', 'PageController@postContact');
Route::get('/about', 'PageController@getAbout');
//Route::get('about/{data}', 'PagesController@getAbout');

Route::get('/venues', 'VenueController@index');
Route::get('/venue/show/{id}', 'VenueController@show')->name('venue.show');

// VENUES: 
Route::get('/venue/create', 'VenueController@create');
Route::get('/venues/edit/{id}', 'VenueController@edit')->name('venue.edit');

Route::post('/venue/update/{id}', 'VenueController@update');
Route::post('/venue/store', 'VenueController@store');

// CATEGORIES:
Route::resource('categories', 'CategoryController', ['except' => ['create']]);
Route::resource('tags', 'TagController', ['except' => ['create']]);

// REVIEWS :
Route::resource('/reviews', 'ReviewController');

//COMMENTS:
Route::post('/comments/{post_id}', 'CommentController@store')->name('comments.store');
Route::get('/comments/{id}/edit', 'CommentController@edit')->name('comments.edit');
Route::put('/comments/{id}', 'CommentController@update')->name('comments.update');
Route::delete('/comments/{id}', 'CommentController@destroy')->name('comments.destroy');
Route::get('/comments/{id}/delete', 'CommentController@delete') ->name('comments.delete');

//GEOCODE:
Route::get('/mygeocode', function(){
  return view('mygeocode.index');
});
Route::get('/googlemap', function(){
  return view('googlemap.index');
});


// Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
// Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);

