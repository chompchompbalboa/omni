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
* Northwest Aire Services
*
* nwaireservices.com
*/
$nwaireservices = function() {

    Route::get('/', function() {
        return view('nwaireservices.welcome')->with('path', 'nwaireservices');
    });
    
};
Route::group(['domain' => 'nwaireserviceslifecoach.com'], $nwaireservices);
Route::group(['domain' => 'nwaireservices.local'], $nwaireservices);

/*
* Rocky Eastman
*
* reastman.com
*/
$reastman = function() {

    Route::get('/', function() {
        return view('reastman.welcome')->with('path', 'reastman');
    });

    Route::get('/preview/{previewID}', 'PreviewController@loadPreview');
    
};
Route::group(['domain' => 'reastman.com'], $reastman);
Route::group(['domain' => 'rockyeastman.local'], $reastman);

/*
* Rocky Eastman Staging
*
* rockyeastmanstaging.com
*/
$rockyeastmanstaging = function() {

    Route::get('/', function() {
        return view('nwaireservices.welcome');
    });
    
};
Route::group(['domain' => 'rockyeastmanstaging.com'], $nwaireservices);

