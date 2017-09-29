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
* Krys Karns - Life Coach
*
* kryskarnslifecoach.com
*/
$kryskarnslifecoach = function() {

    Route::get('/', function() {
        return view('kryskarnslifecoach.home', 
            [
                "assetsPath" => "/assets/kryskarnslifecoach",
                "urlPath" => "/",
                "viewPath" => "kryskarnslifecoach.",
            ]);
    });
    
};
Route::group(['domain' => 'kryskarnslifecoach.com'], $kryskarnslifecoach);
Route::group(['domain' => 'kryskarnslifecoach.local'], $kryskarnslifecoach);

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
Route::group(['domain' => 'nwaireservices.com'], $nwaireservices);
Route::group(['domain' => 'nwaireservices.local'], $nwaireservices);

/*
* Simple Design Co.
*
* simpledesignco.com
*/
$simpledesignco = function() {

    Route::get('/', function() {
        return view('simpledesignco.simpledesignco', 
            [
                "assetsPath" => "/assets/simpledesignco",
                "urlPath" => "/",
                "viewPath" => "simpledesignco.",
            ]);
    });
    
};
Route::group(['domain' => 'simpledesignco.com'], $simpledesignco);
Route::group(['domain' => 'simpledesignco.local'], $simpledesignco);

/*
* Rocky Eastman
*
* reastman.com
*/
$reastman = function() {

    Route::get('/', function() {
        return view('reastman.home')->with('path', 'reastman');
    });

    Route::get('/login', function() {
        return view('reastman.login')->with('path', 'reastman');
    });

    Route::get('/previews/{id}/{page?}', 
        [
            "uses" => "PreviewController@loadPreview",
            "page" => "home"
        ]);
    
};
Route::group(['domain' => 'reastman.com'], $reastman);
Route::group(['domain' => 'reastman.local'], $reastman);

