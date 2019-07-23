<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
   protected $table = 'teams';
   
protected $fillable = ['id','team_name','team_made_by', 'team_made_by_id','team_proj_name','team_project_id',
'created_at','updated_at'];  
}
