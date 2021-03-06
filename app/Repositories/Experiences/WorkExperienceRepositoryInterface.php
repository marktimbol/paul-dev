<?php

namespace App\Repositories\Experiences;

use App\User;

interface WorkExperienceRepositoryInterface
{

	public function store(User $user, $data);

	public function update($id, $data);
	
	public function destroy($id);

}