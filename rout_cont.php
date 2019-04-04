<?php
//basic routes
Route::get('/', function() {
    return view('Welcome');
});

Route::get('about', function() {
    return view('Welcome');
});

// Route verbs
Route::post('/', function(){});

Route::put('/', function(){});

Route::delete('/', function(){});

Route::any('/', function(){});

Route::match(['get', 'post'], '/', function(){});

?>
