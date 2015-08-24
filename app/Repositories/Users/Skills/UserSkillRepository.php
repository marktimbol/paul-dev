<?php

namespace App\Repositories\Users\Skills;

use App\UserSkill;
use App\User;

class UserSkillRepository implements UserSkillRepositoryInterface
{

	public function store(User $user, $data)
	{
		return $user->skills()->create($data);
	}
	
	public function update($id, $data)
	{
		$skill = UserSkill::findOrFail($id);
		$skill->title = $data['title'];
		$skill->years_of_experience = $data['years_of_experience'];
		$skill->description = $data['description'];
		$skill->save();

		return $skill;
	}
	public function destroy($id)
	{
		return UserSkill::findOrFail($id)->delete();
	}

}