<?php

namespace App\Repositories\Jobs;

use App\Repositories\Jobs\JobRepositoryInterface;

class JobRepository implements JobRepositoryInterface {

	public function store($data)
	{
		$user = auth()->user();
		return $user->jobs()->create($data);
	}

}