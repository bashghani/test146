<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
	
	protected $table = 'projects';
protected $fillable = ['id', 'project_name', 'project_description','assigned_to','status','proj_assign_to_id','proj_assign_by','proj_assign_by_id','start_date','start_date','expected_comp_date'];
    //
}
