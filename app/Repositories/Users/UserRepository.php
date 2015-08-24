<?php
namespace App\Repositories\Users;

use App\Repositories\Users\UserRepositoryInterface;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserRepository implements UserRepositoryInterface
{
	protected $user;

	public function __construct()
	{
		$this->user = auth()->user();
	}

	public function store($data)
	{
		return User::create($data);
	}

	public function updateBio($data)
	{
		$user = $this->user;
        $user->bio = $data['bio'];
        $user->save();

        return $user;
	}

	public function updateProfilePicture($name)
	{
		$user = $this->user;
        $user->profilePicture = $name;
        $user->save();

        return $user;
	}
}