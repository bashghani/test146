<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class point extends Model
{
    protected $table = 'points';
	protected $fillable = ['id', 'team_lead_id', 'team_member_id','date_of_points','points_of_day','status',
	'comments_of_day','Evaluated_by','point_task_id','point_task_name','updated_at','created_at'];
}
