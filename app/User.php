<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','password','type_of','created_at','updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	 public function is_emp()
    {
		if(($this->type_of)==("employer"))
		{
        return true;
			
		}
		else{
			return false;
			
			}
    }
	 public function is_admin()
    {
		if(($this->type_of)==("admin"))
		{
        return true;
			
		}
		else{
			return false;
			
			}
    }
}
