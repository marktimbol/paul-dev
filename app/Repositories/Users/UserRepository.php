<?php
namespace App\Repositories\Users;

use App\Repositories\Users\UserRepositoryInterface;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserRepository implements UserRepositoryInterface
{
	public function store($data)
	{
		return User::create($data);
	}

	public function updateBio($data)
	{
        $user = Auth::user();
        $user->bio = $data['bio'];
        $user->save();

        return $user;
	}
}