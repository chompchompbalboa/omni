<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*
* Krys Karns
*
* kryskarnslifecoach.com
*/
$kryskarns = function() {

    Route::get('/', function() {
        return view('kryskarns.welcome');
    });
    
};
Route::group(['domain' => 'kryskarnslifecoach.com'], $kryskarns);
Route::group(['domain' => 'kryskarns.local'], $kryskarns);

/*
* Rocky Eastman
*
* rockyeastman.com
*/
$rockyeastman = function() {

    Route::get('/', function() {
        return view('rockyeastman.welcome');
    });

    Route::get('/preview/{previewID}', 'PreviewController@loadPreview');
    
};
Route::group(['domain' => 'rockyeastman.com'], $rockyeastman);
Route::group(['domain' => 'rockyeastman.local'], $rockyeastman);



/*
* Rocky Eastman Staging
*
* rockyeastmanstaging.com
*/
$rockyeastmanstaging = function() {

    Route::get('/', function() {
        return view('kryskarns.welcome');
    });
    
};
Route::group(['domain' => 'rockyeastmanstaging.com'], $kryskarns);

