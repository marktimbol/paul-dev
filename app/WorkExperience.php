<?php

namespace App;

use Carbon\Carbon;
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

    protected $dates = ['startDate', 'endDate'];

    public function getStartDateAttribute($date)
    {
        return $attributes['startDate'] = Carbon::parse($date)->toFormattedDateString();
    }

    public function getEndDateAttribute($date)
    {
        return $attributes['endDate'] = Carbon::parse($date)->toFormattedDateString();
    }    

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
 