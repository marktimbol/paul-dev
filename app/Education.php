<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{

    protected $table = 'educations';
    

    protected $fillable = [
    	'user_id',
    	'degree',
    	'specialization',
    	'institute',
    	'yearOfCompletion'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
