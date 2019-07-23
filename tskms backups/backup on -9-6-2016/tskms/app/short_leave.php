<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class short_leave extends Model
{
    
	protected $table = 'short_leaves';
protected $fillable = ['id', 'applicant_name', 'applicant_id','start_time','end_time','approval_from_tl',
'approval_from_tl_id','status','leave_type','tl_comment','applicant_comment','Status_updated_by','created_at',
'updated_at'];
	
	
	
	}
