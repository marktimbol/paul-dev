<?php

namespace App\Repositories\Skills\Categories;

interface SkillCategoryRepositoryInterface {

	public function all();

	public function store($data);

	public function update($id, $name);

	public function destroy($id);
}