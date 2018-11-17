 <?php

// API END: Tables to Display in VIew

Route::resource('/api/tags', 'Api\TagController');
Route::resource('/api/venues', 'Api\VenueController');
Route::get('/api/venues_with_categories', 'VenueController@getCategoriesForVenues');

// API END: Axios.post the Changed Checkboxes + Sliders  
Route::post('/api/search_request', 'Api\FilterController@findFilterMatch');
// Route::get('/api/search_request', 'Api\FilterController@findFilterMatch');

// SHOW REACT  APP IN: views/app.blade.php in <div id='root'></div>
Route::view('/filter_results', 'app');
Route::view('/filter_navlink', 'filter/index');

//Example:  Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();


// USER ACCESS: NOT with REACT !!
Route::get('/user', 'UserController@index');
// Route::group(['middleware' => ['auth']], function () {
//   Route:: get('/home', 'PageController@getHome');
// });

// NAVIGATION LINKS:
Route::get('/', 'PageController@index');
Route::get('/home', 'PageController@getHome');
Route::get('/pages/home', 'PageController@getHome')->name('home');
Route::get('/venues', 'VenueController@index');
Route::get('/contact', 'PageController@getContact');
// Route::post('/contact', 'PageController@postContact');
Route::get('/about', 'PageController@getAbout');
//Route::get('about/{data}', 'PagesController@getAbout');

// VENUES: 
Route::get('/venues', 'VenueController@index');
Route::get('/venues/show/{id}', 'VenueController@show')->name('venues.show');
Route::get('/venues/create', 'VenueController@create');
Route::get('/venues/edit/{id}', 'VenueController@edit')->name('venues.edit');
Route::post('/venue/update/{id}', 'VenueController@update');
Route::post('/venue/store', 'VenueController@store');

// [RESROUCES FOR  API ENDPOINTS]: 
Route::resource('/api/tags', 'Api\TagController');
Route::resource('/api/venues', 'Api\VenueController');

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

// MOODIFIER:
// Route::resource('/moodifier','MoodifierController');

//GEOCODE:
Route::get('/mygeocode', function(){
  return view('mygeocode.index');
});
// Route::get('/googlemap', function(){
//   return view('googlemap.index');
// });
// Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
// Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
