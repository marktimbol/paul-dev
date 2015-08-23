<?php

namespace App\Repositories\Skills;

use App\Skill;
use App\User;

class SkillRepository implements SkillRepositoryInterface
{

	public function store(User $user, $data)
	{
		return $user->skills()->create($data);
	}
	
	public function update($id, $data)
	{
		$skill = Skill::findOrFail($id);
		$skill->title = $data['title'];
		$skill->years_of_experience = $data['years_of_experience'];
		$skill->description = $data['description'];
		$skill->save();

		return $skill;
	}
	public function destroy($id)
	{
		return Skill::findOrFail($id)->delete();
	}

}