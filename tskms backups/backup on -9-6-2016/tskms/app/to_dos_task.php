<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class to_dos_task extends Model
{
    protected $table = 'to_dos_tasks';
protected $fillable = ['id','to_do_name', 'to_do_description','to_task_id','to_task_name','to_proj_id','to_proj_name','to_tl_id','to_tl_name','status','to_made_by','to_made_by_id','weightage','created_at','updated_at'];
}
