<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    
    protected $fillable = ['user_id', 'title', 'years_of_experience', 'description'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
