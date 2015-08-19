<?php
namespace App\Repositories\Users;

use App\Repositories\Users\UserRepositoryInterface;
use App\User;

class UserRepository implements UserRepositoryInterface
{
	public function store($data)
	{
		return User::create($data);
	}
}