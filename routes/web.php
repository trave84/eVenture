 <?php

// [READ API ENDPOINTS]:DISPLAY A VENUE FILTER CHECKLIST SIDEBAR 

Route::resource('/api/tags', 'Api\TagController');
Route::resource('/api/venues', 'Api\VenueController');


// routes/web.php
Route::view('/{path?}', 'app');