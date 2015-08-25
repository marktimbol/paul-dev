<?php

namespace App\Repositories\Skills\Categories;

use App\SkillCategory;

class SkillCategoryRepository implements SkillCategoryRepositoryInterface {

	public function all()
	{
		return SkillCategory::latest()->get();
	}

	public function store($data)
	{
		return SkillCategory::create($data);
	}

	public function update($id, $name)
	{
		$skillCategory = SkillCategory::findOrFail($id);
		$skillCategory->name = $name;
		$skillCategory->save();

		return $skillCategory;
	}

	public function destroy($id)
	{
		SkillCategory::findOrFail($id)->delete();
	}

}