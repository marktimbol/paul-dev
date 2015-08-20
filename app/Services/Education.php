<?php

namespace App\Services;

class Education
{

	public function degree()
	{
		return [
			''						=> '',
			'High School'			=> 'High School',
			'Bachelor of Science' 	=> 'Bachelor of Science',
			'Bachelor of Arts' 		=> 'Bachelor of Arts',
			'Executive MBA' 		=> 'Executive MBA',
			'MBA'	 				=> 'MBA',
			'Masters' 				=> 'Masters',
			'PHD' 					=> 'PHD'
		];
	}
}