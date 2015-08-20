<?php

namespace App\Repositories\Educations;

use App\Education;
use App\User;


class EducationRepository implements EducationRepositoryInterface
{

	public function store(User $user, $data)
	{
		return $user->educations()->create($data);
	}
	
	public function destroy($id)
	{
		return Education::findOrFail($id)->delete();
	}

}