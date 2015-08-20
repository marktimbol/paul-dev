<?php

namespace App\Repositories\Experiences;

use App\User;
use App\WorkExperience;


class WorkExperienceRepository implements WorkExperienceRepositoryInterface
{

	public function store(User $user, $data)
	{
		return $user->workExperiences()->create($data);
	}
	
	public function destroy($id)
	{
		return WorkExperience::findOrFail($id)->delete();
	}

}