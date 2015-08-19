<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
	protected $currentUser;

	public function __construct()
	{
		$this->middleware('auth');
		$this->currentUser = Auth::user();
	}

    public function index()
    {
    	$currentUser = $this->currentUser;
    	return view('pages.profile.index', compact('currentUser'));
    }

    public function edit()
    {
    	$currentUser = $this->currentUser;
    	return view('pages.profile.edit', compact('currentUser'));
    }
}
