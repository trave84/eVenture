 <?php

// routes/web.php
Route::view('/{path?}', 'app');

// [READ API ENDPOINTS]:DISPLAY A VENUE FILTER CHECKLIST SIDEBAR 

Route::resource('/api/tags', 'Api\TagController');
Route::resource('/api/venues', 'Api\VenueController');

Route::get('tags', 'TagController@index');
Route::get('about', 'PageController@getAbout');

