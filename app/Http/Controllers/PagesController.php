<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index()
    {
    	if( Auth::check() )
    	{
    		return redirect()->route('profile');
    	}
    	return view('pages.index');
    }
}
