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

Route::get('/', 'WelcomeController@index');

Route::get('contact',"WelcomeController@contact");
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('compiler','phpCompiler_controller@compile_php');
Route::get('login','ArticlesController@login');

Route::get('user_codes','ArticlesController@index');
Route::get('user_codes/create','ArticlesController@create');
Route::get('user_codes/{id}','ArticlesController@show');
