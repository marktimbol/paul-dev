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
	
	public function update($id, $data)
	{
		$workExperience = WorkExperience::findOrFail($id);
		$workExperience->companyName = $data['companyName'];
		$workExperience->website = $data['website'];
		$workExperience->startDate = $data['startDate'];
		$workExperience->endDate = $data['endDate'];
		$workExperience->isPresent = $data['isPresent'];
		$workExperience->save();

		return $workExperience;
			
	}

	public function destroy($id)
	{
		return WorkExperience::findOrFail($id)->delete();
	}

}