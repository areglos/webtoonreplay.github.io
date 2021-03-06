<?php

Route::auth();
Route::get('logout', ['as' => 'logout.get', 'uses' => 'Auth\LoginController@logout']);

Route::group(['prefix' => 'user', 'as' => 'user.', 'middleware' => 'auth'], function () {
	Route::get('/',			['as' => 'home', 'uses' => 'UserController@home']);
	Route::get('profile',	['as' => 'profile', 'uses' => 'UserController@profile']);
	Route::get('favorite',	['as' => 'favorite', 'uses' => 'UserController@favorite']);
	Route::get('password',  ['as' => 'password', 'uses' => 'UserController@password']);
	Route::post('password', ['as' => 'password.post', 'uses' => 'UserController@changePassword']);
	Route::get('setting', ['as' => 'setting', 'uses' => 'UserController@setting']);
});
