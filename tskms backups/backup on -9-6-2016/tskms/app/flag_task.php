<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flag_task extends Model
{
   
    protected $table = 'flag_tasks';
	protected $fillable = ['id', 'flag_status', 'usr_id','task_id','task_name','flag_start_time','flag_end_time','updated_at','created_at'];
   
   
 }
