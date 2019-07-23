<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
   protected $table = 'tasks';
   
protected $fillable = ['id','task_name','task_assigned_to', 'assgn_to_id','task_description','task_project_name','assigned_on_date','task_assigned_by','task_assigned_by_id','task_total_time','task_comp_comment','status',
'task_expected_comp_date'];  
}
