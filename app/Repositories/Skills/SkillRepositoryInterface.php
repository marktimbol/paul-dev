<?php

namespace App\Repositories\Skills;

use App\User;

interface SkillRepositoryInterface
{

	public function store(User $user, $data);
	
	public function destroy($id);

}