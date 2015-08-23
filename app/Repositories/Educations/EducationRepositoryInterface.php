<?php

namespace App\Repositories\Educations;

use App\User;

interface EducationRepositoryInterface
{

	public function store(User $user, $data);
	
	public function update($id, $date);
	
	public function destroy($id);

}