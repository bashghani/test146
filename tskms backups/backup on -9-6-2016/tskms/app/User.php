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
        'first_name', 'last_name','type_of', 'dept', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
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
	 public function is_proj_mgr()
    {
		if(($this->type_of)==("proj_manager"))
		{
        return true;
			
		}
		else{
			return false;
			
			}
    }
	 public function is_teamlaed()
    {
		if(($this->type_of)==("team_lead"))
		{
        return true;
			
		}
		else{
			return false;
			
			}
    }
	 public function is_team_member()
    {
		if(($this->type_of)==("team_member"))
		{
        return true;
			
		}
		else{
			return false;
			
			}
    }
}
