<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
	public function __construct()
	{
		return $this->middleware('auth');
	}

    public function home()
    {
        $currentUser = User::with(['skills' => function($query) {
            $query->orderBy('created_at', 'desc');
        }, 'workExperiences' => function($query){
            $query->orderBy('created_at', 'desc'); 
        }, 'educations' => function($query) {
            $query->orderBy('created_at', 'desc');
        }])->findOrFail(Auth::user()->id);

    	return view('admin.index', compact('currentUser'));
    }
}
