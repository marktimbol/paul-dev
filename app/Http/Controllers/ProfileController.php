<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Repositories\Users\UserRepositoryInterface;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
	protected $currentUser;
    protected $userRepository;

	public function __construct(UserRepositoryInterface $user)
	{
		$this->middleware('auth');
		$this->currentUser = Auth::user();
        $this->userRepository = $user;
	}

    public function index()
    {
        //$currentUser = $this->currentUser;
        $currentUser = User::with(['skills' => function($query) {
            $query->orderBy('created_at', 'desc');
        }, 'workExperiences' => function($query){
            $query->orderBy('created_at', 'desc'); 
        }, 'educations' => function($query) {
            $query->orderBy('created_at', 'desc');
        }])->findOrFail(Auth::user()->id);
      
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
        }, 'educations' => function($query) {
            $query->orderBy('created_at', 'desc');
        }])->findOrFail(Auth::user()->id);
      
        return view('pages.profile.edit', compact('currentUser'));
    }

    public function update($data)
    {

    }

    public function updateBio(Request $request)
    {      
        $data = [
            'bio'  => $request->bio
        ];

        $this->userRepository->updateBio($data);

    }

    public function destroy()
    {
        
    }
}
