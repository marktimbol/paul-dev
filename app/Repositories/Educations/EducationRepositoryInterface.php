<?php

namespace App\Repositories\Educations;

use App\User;

interface EducationRepositoryInterface
{

	public function store(User $user, $data);
	
	public function destroy($id);

}