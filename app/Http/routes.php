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

Route::resource('dashboard', 'DashboardController');
Route::resource('embed', 'EmbedController');
Route::resource('category', 'CategoryController');

Route::get('/', 'WelcomeController@index');
Route::get('categories/{title}', 'WelcomeController@category');
Route::get('popular', 'WelcomeController@popular');
Route::get('search', 'WelcomeController@search');
Route::get('{title}', 'WelcomeController@show');

Route::controllers([
	'auth' => 'Auth\AuthController',
	// 'password' => 'Auth\PasswordController',
]);
