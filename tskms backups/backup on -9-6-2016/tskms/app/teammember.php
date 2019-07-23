<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teammember extends Model
{
    protected $table = 'team_members';
	protected $fillable = ['id','mem_team_id','mem_team_name', 'mem_team_made_by_id','mem_team_made_by','member_id','member_name','mem_team_project_id','created_at','updated_at'];  
	
}
