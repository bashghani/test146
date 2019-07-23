<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leave extends Model
{
   protected $table = 'leaves';
	protected $fillable = ['id', 'applicant_name', 'applicant_id','start_date','end_date','approval_from_tl',
	'approval_from_tl_id','status','leave_type','applicant_comment','tl_comment','Status_updated_by','updated_at','created_at'];
}
