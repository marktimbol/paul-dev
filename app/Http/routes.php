<?php
Route::get('/test', function() {
	return redirect()->route('login');
});

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

// Authentication routes...
Route::get('auth/login', ['as' => 'login', 'uses' =>  'AuthController@getLogin']);
Route::post('auth/login', 'AuthController@postLogin');
Route::get('auth/logout', 'AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'AuthController@getRegister');
Route::post('auth/register', 'AuthController@postRegister');

Route::get('profile', ['as' => 'profile', 'uses' => 'ProfileController@index']);
Route::get('profile/edit', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);