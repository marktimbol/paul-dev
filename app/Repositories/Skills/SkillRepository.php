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
	
	public function destroy($id)
	{
		return Skill::findOrFail($id)->delete();
	}

}