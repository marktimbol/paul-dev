<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
	protected $fillable = [
		'title',
		'category',
		'subCategory',
		'description',
		'skillsRequired',
		'budgetType',
		'budgetCost',
		'location'
	];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
