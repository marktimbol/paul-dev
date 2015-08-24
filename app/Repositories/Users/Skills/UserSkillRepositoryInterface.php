<?php

namespace App\Repositories\Users\Skills;

use App\User;

interface UserSkillRepositoryInterface
{

	public function store(User $user, $data);

	public function update($id, $data);
	
	public function destroy($id);

}