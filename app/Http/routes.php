<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * Static Pages
 */
Route::get('/', 'StaticController@indexPage');
Route::get('/download', 'StaticController@downloadPage');
Route::get('/about', 'StaticController@aboutPage');

/**
 * Locations
 */
Route::resource('/location', 'LocationController');

/**
 * API - TO DO
 */
