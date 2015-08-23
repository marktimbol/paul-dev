<?php
namespace App\Repositories\Users;

interface UserRepositoryInterface
{
	public function store($data);

	public function updateBio($data);
}