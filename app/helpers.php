<?php

function flash($title = null, $message = null)
{
	$flash = app('App\Http\Flash');
	if( func_num_args() == 0 )
	{
		return $flash;
	}

	return $flash->info($title, $message);
}

function profilePicturePath()
{
	return auth()->user()->profilePicture ? userPhotosPath() . auth()->user()->profilePicture : 'images/default.png';
}

function userPhotosPath()
{
	return 'images/users/' . auth()->user()->fullName . '/';
}