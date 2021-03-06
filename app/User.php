<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['firstName', 'lastName', 'email', 'password', 'country', 'phoneNumber'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function setPasswordAttribute($password)
    {
        return $this->attributes['password'] = Hash::make($password);
    }

    public function getFullNameAttribute()
    {
        return ucfirst($this->firstName) . ' ' . $this->lastName;
    }

    public function skills()
    {
        return $this->hasMany('App\UserSkill');
    }

    public function workExperiences()
    {
        return $this->hasMany('App\WorkExperience');
    }
    
    public function educations()
    {
        return $this->hasMany('App\Education');
    }

    public function jobs()
    {
        return $this->hasMany('App\Job');
    }
}
