<?php

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

// Authentication routes...
Route::get('auth/login', ['as' => 'login', 'uses' =>  'AuthController@getLogin']);
Route::post('auth/login', 'AuthController@postLogin');
Route::get('auth/logout', 'AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'AuthController@getRegister');
Route::post('auth/register', 'AuthController@postRegister');

Route::get('auth/user', 'AuthController@user');


Route::put('profile/update-bio', ['as' => 'profile.updateBio', 'uses' => 'ProfileController@updateBio']);
Route::put('profile/update-picture', ['as' => 'profile.updatePicture', 'uses' => 'ProfileController@updatePicture']);

Route::resource('profile', 'ProfileController');

Route::group(['prefix' => 'profile'], function(){
	Route::resource('skills', 'UserSkillsController');
	Route::resource('work-experiences', 'WorkExperiencesController');
	Route::resource('educations', 'EducationsController');
	Route::resource('jobs', 'JobsController');
});

/**
 * Administrator Section
 */
Route::group(['prefix' => 'admin'], function(){

	Route::get('/', ['as' => 'admin.home', 'uses' => 'DashboardController@home']);

	Route::resource('skill-categories', 'SkillCategoriesController');

});


Route::group(['prefix' => 'api/v1'], function() {

	Route::resource('skill-categories', 'API\SkillCategoriesController', ['except' => ['create', 'edit']]);

});



