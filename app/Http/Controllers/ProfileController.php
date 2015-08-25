<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Repositories\Users\UserRepositoryInterface;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ProfileController extends Controller
{
	protected $currentUser;
    protected $userRepository;

    protected $photoDir = 'images/users/';
    protected $picture_name;
    protected $picture_path;
    protected $thumbnail_path;


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

    public function updatePicture(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|mimes:jpg,jpeg,png,bmp|max:2000'
        ]);

        $photo = $request->file('photo');

        File::exists(userPhotosPath()) or File::makeDirectory(userPhotosPath());

        $fileName = $this->makeThumbnail($photo);              

        $this->userRepository->updateProfilePicture($fileName);
    }

    protected function makeThumbnail(UploadedFile $photo)
    {   

        $fileName = sprintf('%s_%s', time(), $photo->getClientOriginalName());

        $image = Image::make($photo->getRealPath());

        $image->fit(250)
              ->save(userPhotosPath() . $fileName);  

        return $fileName;
    }

    public function destroy()
    {
        
    }
}
