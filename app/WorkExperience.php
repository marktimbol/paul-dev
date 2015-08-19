<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $fillable = [
    	'user_id',
    	'companyName',
    	'website',
    	'startDate',
    	'endDate',
    	'isPresent'
    ];


    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}