<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Jobs\RegisterUserJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getRegister()
    {
    	return view('pages.register');
    }

    public function postRegister(RegisterUserRequest $request)
    {
        $this->dispatchFrom(RegisterUserJob::class, $request);
        flash()->overlay('Welcome!', 'Thank you for registering with us.');
    	return redirect()->route('login');
    }

    public function getLogin()
    {
    	return view('pages.login');
    }

    public function postLogin(LoginUserRequest $request)
    {
    	$credentials = [
    		'email'	    => $request->email,
    		'password'  => $request->password
    	];

    	if( Auth::attempt($credentials, $request->has('remember')) )
    	{
            flash()->success('Hi, again!', 'You are now logged in.');
    	    return redirect()->intended('profile');
    	}

    	return redirect()->back()->withErrors(["The email and password didn't match our records."]);
    }

    public function getLogout()
    {
        Auth::logout();
    	flash()->success('See ya', 'You are now logged out.');
        return redirect()->route('home');
    }
}
