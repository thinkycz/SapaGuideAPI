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
Route::get('/account', 'StaticController@myAccountPage');

/**
 * Locations
 */
Route::get('/location/create2', 'LocationController@create2');
Route::resource('/location', 'LocationController');

/**
 * API - TO DO
 */

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');