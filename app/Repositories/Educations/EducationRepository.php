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

	public function update($id, $data)
	{
		$education = Education::findOrFail($id);
		$education->degree = $data['degree'];
		$education->specialization = $data['specialization'];
		$education->institute = $data['institute'];
		$education->yearOfCompletion = $data['yearOfCompletion'];
	
		$education->save();

		return $education;
	}
	
	public function destroy($id)
	{
		return Education::findOrFail($id)->delete();
	}

}