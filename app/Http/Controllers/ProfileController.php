<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
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

    public function show()
    {

    }

    public function edit()
    {
    	//$currentUser = $this->currentUser;
        $currentUser = User::with(['skills' => function($query) {
            $query->orderBy('created_at', 'desc');
        }, 'workExperiences' => function($query){
            $query->orderBy('created_at', 'desc'); 
        }])->findOrFail(Auth::user()->id);
      
        return view('pages.profile.edit', compact('currentUser'));
    }

    public function update()
    {

    }

    public function destroy()
    {
        
    }
}
