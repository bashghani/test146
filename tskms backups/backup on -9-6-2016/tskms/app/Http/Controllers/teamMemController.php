<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Session;
use App\task;
use App\leave;
use App\short_leave;
use App\point;
use App\project;
use Carbon\Carbon;
use App\teammember;
use App\to_dos_task;
use App\flag_task;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;


use App\Http\Requests;

class teamMemController extends Controller
{
    public function ch_psw_team_mem_vw()
    {
		
		 return view('teammem_ch_pswd'); 
	/*$input=Input::all();
	$user = Auth::user();
	$hashedPassword=$user->password;
	if (Hash::check('123456', $hashedPassword)) {
    echo "".$user->password;die;
}
else{	

 echo "notmatched";

     die;}*/
	}
	
	public function ch_psw_team_mem(Request $request)
    {
		
		// return view('adm_ch_pswd'); die;
	$input=Input::all();
	//var_dump($input); //die;
	$user = Auth::user();
	$inp_pass=$input['current_password'];
	$hashedPassword=$user->password;
	if (Hash::check($inp_pass, $hashedPassword)) {
   // echo "ok</br>".$user->password;
	 $this->validate( $request, [
            'first_name' => 'required|max:255',
			 'last_name' => 'required|max:255',
			 'type_of' => 'required|max:255',
            //'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed|different:current_password',
			'current_password' => 'required|max:255',
			
			
        ]);
	 //  echo "input is valid123456</br>";
	   $user = Auth::user();
	   
	    //var_dump($input);die;
		
		$usr =User::find(Auth::user()->id);
		
		
		// $usr->first_name = $input['first_name'];
		// $usr->last_name = $input['last_name'];
		// $usr->type_of = $input['type_of'];
	//	$usr->email = $input['email'];
		// $usr->password = $input['password'];
		// $usr->dept = $input['dept'];
		  $usr->password = bcrypt($input['password']);
		 
		 
		//$jobb = $input;
		//$edit_jobs=$input;
		 $usr->save();
	   
	   
	   Session::flash('message', 'Your password has been changed Successfully!'); 
	   
	  $tl_id=Auth::user()->id;
	  $today = Carbon::now();
	 $match_tasks=task::where('status', '!=', 'complete' )->where('status', '!=', 'cancelled')->where
	 ('assgn_to_id', '=',  $tl_id)->get();
		// $team_member=teammember::where('mem_team_made_by_id', '=', $tl_id )->get();
	  //$team_project=project::where('proj_assign_to_id', '=', $tl_id )->get();
	  $match_users=user::where('id', '=',  $tl_id)->get();
	  $pending_task_countp=task::where('status', '=', 'pending' )->where
 ('task_expected_comp_date', '<',  $today)->where('assgn_to_id', '=',  $tl_id)->count();
	 
	 return view('tmhome',array('matched_tasks'=>$match_tasks,'matched_users'=>$match_users,'pending_task_count'=>$pending_task_countp)); 
	   
	   
	   
	
	
}
else{ 

// echo "notmatched";
 Session::flash('message', 'Current password mismatch!'); 
Session::flash('alert-class', 'alert-danger'); 
 return view('teamlead_ch_pswd');

     //die;
	 }
	}
	 public function alltasks_mem()
    {
	 $tl_id=Auth::user()->id;
	  $today = Carbon::now();
	  $match_tasks=task::where('assgn_to_id', '=',  $tl_id)->get();
	// $match_tasks=task::where('status', '!=', 'complete' )->where('status', '!=', 'cancelled')->where
	// ('assgn_to_id', '=',  $tl_id)->get();
		// $team_member=teammember::where('mem_team_made_by_id', '=', $tl_id )->get();
	  //$team_project=project::where('proj_assign_to_id', '=', $tl_id )->get();
	  $match_users=user::where('id', '=',  $tl_id)->get();
	  $pending_task_countp=task::where('status', '=', 'pending' )->where
 ('task_expected_comp_date', '<',  $today)->where('assgn_to_id', '=',  $tl_id)->count();
	 
	 return view('tmhome_simple',array('matched_tasks'=>$match_tasks,'matched_users'=>$match_users,'pending_task_count'=>$pending_task_countp)); 
	   
	 
	
	}	
	public function show_canceled_task_mem()
    {
	 $tl_id=Auth::user()->id;
	 $today = Carbon::now();
	 $match_tasks=task::where('status', '=', 'cancelled' )->where('assgn_to_id', '=',  $tl_id)->get();
	//  $match_tasks=task::where('assgn_to_id', '=',  $tl_id)->get();
	// $match_tasks=task::where('status', '!=', 'complete' )->where('status', '!=', 'cancelled')->where
	// ('assgn_to_id', '=',  $tl_id)->get();
		// $team_member=teammember::where('mem_team_made_by_id', '=', $tl_id )->get();
	  //$team_project=project::where('proj_assign_to_id', '=', $tl_id )->get();
	  $match_users=user::where('id', '=',  $tl_id)->get();
	  $pending_task_countp=task::where('status', '=', 'pending' )->where
 ('task_expected_comp_date', '<',  $today)->where('assgn_to_id', '=',  $tl_id)->count();
	 
	 return view('tmhome_simple',array('matched_tasks'=>$match_tasks,'matched_users'=>$match_users,'pending_task_count'=>$pending_task_countp));  
	   
	 
	
	}
	public function show_completed_task_mem()
    {
	 
	   $tl_id=Auth::user()->id;
	   
	   $today = Carbon::now();
	  //$match_tasks=task::where('assgn_to_id', '=',  $tl_id)->get();
	  $match_tasks=task::where('status', '=', 'complete' )->where('assgn_to_id', '=',  $tl_id)->get();
	// $match_tasks=task::where('status', '!=', 'complete' )->where('status', '!=', 'cancelled')->where
	// ('assgn_to_id', '=',  $tl_id)->get();
		// $team_member=teammember::where('mem_team_made_by_id', '=', $tl_id )->get();
	  //$team_project=project::where('proj_assign_to_id', '=', $tl_id )->get();
	  $match_users=user::where('id', '=',  $tl_id)->get();
	   $pending_task_countp=task::where('status', '=', 'pending' )->where
 ('task_expected_comp_date', '<',  $today)->where('assgn_to_id', '=',  $tl_id)->count();
	 
	return view('tmhome_simple',array('matched_tasks'=>$match_tasks,'matched_users'=>$match_users,'pending_task_count'=>$pending_task_countp));   
	   
	 
	
	}
	public function show_current_task_mem()
    {
	  $tl_id=Auth::user()->id;
	   $today = Carbon::now();
	   $now_time= Carbon::now();
	     $for_flag_starttime= Carbon::now();
  $pending_task_countp=task::where('status', '=', 'pending' )->where
 ('task_expected_comp_date', '<',  $today)->where('assgn_to_id', '=',  $tl_id)->count();
 
	 $match_tasks=task::where('status', '!=', 'complete' )->where('status', '!=', 'cancelled')->where
	 ('assgn_to_id', '=',  $tl_id)->get();
		// $team_member=teammember::where('mem_team_made_by_id', '=', $tl_id )->get();
	  //$team_project=project::where('proj_assign_to_id', '=', $tl_id )->get();
	  $match_users=user::where('id', '=',  $tl_id)->get();
	  $chk_flag=flag_task::where('usr_id', '=', $tl_id)->first();
	 // Carbon::parse('1975-05-21 22:23:00.123456');
	   //$for_flag_starttime=$chk_flag->flag_start_time;
	    $for_flag_starttime=Carbon::parse($chk_flag->flag_start_time);
		$total_diff_current=$for_flag_starttime->diffInSeconds($now_time);
		
	  // var_dump($total_diff);die;
	  
	  
	  
	  
	// echo $chk_flag->task_id;die;
	  
	  
	  $diff_for_timer=task::where('id','=',$chk_flag->task_id)->first();
	  // var_dump($diff_for_timer);die;
	$diff_in_hours=$diff_for_timer['task_total_time'];
	$prev_diff_in_seconds=$diff_in_hours*60*60;
	//echo $prev_diff_in_seconds ;die;
	
	 $diff_in_seconds=$total_diff_current+$prev_diff_in_seconds;
	 return view('tmhome',array('matched_tasks'=>$match_tasks,'matched_users'=>$match_users,'pending_task_count'=>$pending_task_countp,'flag_stat'=>$chk_flag,'differ_in_sec'=>$diff_in_seconds,'flag_task_details'=>$chk_flag));  
	 
	 
	 
	   
	 
	
	}
	public function show_overdue_tasks_tm()
 {	$tl_id=Auth::user()->id;
  $today = Carbon::now();
  $pending_task_countp=task::where('status', '=', 'pending' )->where
 ('task_expected_comp_date', '<',  $today)->where('assgn_to_id', '=',  $tl_id)->count();
 $match_tasks=task::where('status', '=', 'pending' )->where
 ('task_expected_comp_date', '<',  $today)->where('assgn_to_id', '=',  $tl_id)->get();
  $match_users=user::where('id', '=',  $tl_id)->get();
		//$team_member=teammember::where('mem_team_made_by_id', '=', $tl_id )->get();
	// $team_project=project::where('proj_assign_to_id', '=', $tl_id )->get();
	// $coun_leaves=leave::where('approval_from_tl_id', '=',  $tl_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->count();
	   return view('tmhome_simple',array('matched_tasks'=>$match_tasks,'matched_users'=>$match_users,'pending_task_count'=>$pending_task_countp));  
 
 
 }	
	
	public function leave_show_vw()
	{$input=input::all();
	//var_dump($input); echo "on leave system";
//die;	
$input = Input::all();
	//var_dump($input);die;
	$te_mem_id=Auth::user()->id;
	//$tm_detail_points=point::where('team_member_id', '=', $te_mem_id )->get();
	
	$today = Carbon::today();
	
	//$input = Input::all();
//$user = Auth::user();
//$input['team_lead_id']=Auth::user()->id;
//$proj =user::find($input['user_id_del']);
//var_dump($input);die;
//$input['status']="done";
//$update_status=point::create($input);
//		$proj->delete();
     // $user_points=point::all();
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	$tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	
	 $match_leaves=leave::where('applicant_id', '=', $te_mem_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tmleave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die; 
	   
	 
	
	}
	public function apply_leave()
    {
		$input=input::all();
		 $te_mem_id=Auth::user()->id;
		//var_dump($input);die;
		$fromd = $input['start_date'];
	$segr_fromdate= (explode("-",$fromd));
	//echo $segr_fromdate[0]."<br>";
	//echo $segr_fromdate[1]."<br>";
	//echo $segr_fromdate[2]."<br>";
	$tomd = $input['end_date'];
	$segr_tomdate= (explode("-",$tomd));
	//echo $segr_tomdate[0]."<br>";
	//echo $segr_tomdate[1]."<br>";
	//echo $segr_tomdate[2]."<br>";
	//var_dump($input);
$from_date	= Carbon::now();
$to_date	= Carbon::now();
	$from_date->year($segr_fromdate[0])->month($segr_fromdate[1])->day($segr_fromdate[2])->hour(0)->minute(0)->second(0)->toDateTimeString();
	//$from_date->toDateString();
	//echo $from_date;die;
$to_date->year($segr_tomdate[0])->month($segr_tomdate[1])->day($segr_tomdate[2])->hour(0)->minute(0)->second(0)->toDateTimeString();

//echo $from_date;
//echo "</br>down</br>";
//$diff=$from_date->diffInDays($to_date);
//echo $to_date;die;

		 $segr_forleave= (explode("-",$input['team_lead_for_approval']));
		  $input['approval_from_tl']=$segr_forleave[0];
	$input['approval_from_tl_id']=$segr_forleave[1]; 
	$input['status']="pending";
	 $input['applicant_id']=Auth::user()->id;
	  $input['applicant_name']=Auth::user()->first_name;
	   $input['start_date']=$from_date;
	   $input['end_date']=$to_date;
	   $leav_app=leave::create($input);
	   $today = Carbon::today();
	
	//$input = Input::all();
//$user = Auth::user();
//$input['team_lead_id']=Auth::user()->id;
//$proj =user::find($input['user_id_del']);
//var_dump($input);die;
//$input['status']="done";
//$update_status=point::create($input);
//		$proj->delete();
     // $user_points=point::all();
	 $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	$tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	  $match_leaves=leave::where('applicant_id', '=', $te_mem_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tmleave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	  
	 
	   
	 
	
	}
	public function edit_leave()
    {
		$input=input::all();
	//var_dump($input);die;
		 $segr_forleave= (explode("-",$input['team_lead_for_approval']));
		  $input['approval_from_tl']=$segr_forleave[0];
	      $input['approval_from_tl_id']=$segr_forleave[1]; 
		   $start_date = Carbon::now();
 $end_date = Carbon::now();
 //$chk=$input['end_date'];
//$today = Carbon::parse($chk);
 //echo $today;die; //var_dump($today); die;
//echo $today; die;
$start_date = Carbon::parse($input['start_date']);
$end_date = Carbon::parse($input['end_date']);
		//var_dump($input);die;
		$te_mem_id=Auth::user()->id;
		$te_mem_name=Auth::user()->first_name;
		$lv_id=$input['leave_id'];
		$leav_app =leave::find($lv_id);
		 $leav_app->leave_type = $input['leave_type'];
		  $leav_app->status = $input['status'];
		 $leav_app->Status_updated_by  =Auth::user()->first_name." ".Auth::user()->last_name;
		  $leav_app->applicant_comment = $input['applicant_comment'];
		   $leav_app->start_date = $start_date;
		    $leav_app->end_date = $end_date;
			 $leav_app->approval_from_tl = $input['approval_from_tl'];
			  $leav_app->approval_from_tl_id = $input['approval_from_tl_id'];
			    $leav_app->save();
		
	 $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	 $match_leaves=leave::where('applicant_id', '=', $te_mem_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tmleave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	}
	public function all_leave_mem()
	{	//var_dump($input); echo "on leave system";
//die;	
$input = Input::all();
	//var_dump($input);die;
	$te_mem_id=Auth::user()->id;
	//$tm_detail_points=point::where('team_member_id', '=', $te_mem_id )->get();
	
	$today = Carbon::today();
	
	//$input = Input::all();
//$user = Auth::user();
//$input['team_lead_id']=Auth::user()->id;
//$proj =user::find($input['user_id_del']);
//var_dump($input);die;
//$input['status']="done";
//$update_status=point::create($input);
//		$proj->delete();
     // $user_points=point::all();
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	$tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	
	  $match_leaves=leave::where('applicant_id', '=', $te_mem_id)->orderBy('id', 'desc')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tmleavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die; 
	   
	 
	
	}
	
	public function cancelled_leave_mem()
	{	//var_dump($input); echo "on leave system";
//die;	
$input = Input::all();
	//var_dump($input);die;
	$te_mem_id=Auth::user()->id;
	//$tm_detail_points=point::where('team_member_id', '=', $te_mem_id )->get();
	
	$today = Carbon::today();
	
	//$input = Input::all();
//$user = Auth::user();
//$input['team_lead_id']=Auth::user()->id;	
//$proj =user::find($input['user_id_del']);
//var_dump($input);die;
//$input['status']="done";
//$update_status=point::create($input);
//		$proj->delete();
     // $user_points=point::all();
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	$tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	
	  $match_leaves=leave::where('applicant_id', '=', $te_mem_id)->where('status', '=', 'cancelled' )->orderBy('id', 'desc')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tmleavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die; 
	   
	 
	
	}
	public function approved_leave_mem()
	{	//var_dump($input); echo "on leave system";
//die;	
$input = Input::all();
	//var_dump($input);die;
	$te_mem_id=Auth::user()->id;
	//$tm_detail_points=point::where('team_member_id', '=', $te_mem_id )->get();
	
	$today = Carbon::today();
	
	//$input = Input::all();
//$user = Auth::user();
//$input['team_lead_id']=Auth::user()->id;
//$proj =user::find($input['user_id_del']);
//var_dump($input);die;
//$input['status']="done";
//$update_status=point::create($input);
//		$proj->delete();
     // $user_points=point::all();
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	$tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	
	  $match_leaves=leave::where('applicant_id', '=', $te_mem_id)->where('status', '=', 'Approved' )->orderBy('id', 'desc')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tmleavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die; 
	   
	 
	
	}
	public function pending_leave_mem()
	{	//var_dump($input); echo "on leave system";
//die;	
$input = Input::all();
	//var_dump($input);die;
	$te_mem_id=Auth::user()->id;
	//$tm_detail_points=point::where('team_member_id', '=', $te_mem_id )->get();
	
	$today = Carbon::today();
	
	//$input = Input::all();
//$user = Auth::user();
//$input['team_lead_id']=Auth::user()->id;
//$proj =user::find($input['user_id_del']);
//var_dump($input);die;
//$input['status']="done";
//$update_status=point::create($input);
//		$proj->delete();
     // $user_points=point::all();
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	$tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	
	  $match_leaves=leave::where('applicant_id', '=', $te_mem_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	  //->orderBy('id', 'desc')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tmleave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die; 
	   
	 
	
	}
public function tm_short_leave_vw()
	{	$input=input::all();
//	var_dump($input); echo "on leave system";
//die;	
$input = Input::all();
	//var_dump($input);die;
	$te_mem_id=Auth::user()->id;
	//$tm_detail_points=point::where('team_member_id', '=', $te_mem_id )->get();
	
	$today = Carbon::today();
	
	//$input = Input::all();
//$user = Auth::user();
//$input['team_lead_id']=Auth::user()->id;
//$proj =user::find($input['user_id_del']);
//var_dump($input);die;
//$input['status']="done";
//$update_status=point::create($input);
//		$proj->delete();
     // $user_points=point::all();
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	$tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	
	 $match_leaves=short_leave::where('applicant_id', '=', $te_mem_id)->where('status', '!=', 'approved' )->where('status', '!=', 'cancelled')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tm_short_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die; 
	   
	 
	}
	public function apply_short_leave()
	{	$input=input::all();
	//var_dump($input); echo "on leave system";
//die;	
$segr_tl= (explode("-",$input['team_lead_for_approval']));
	$input['approval_from_tl']=$segr_tl[0];
	$input['approval_from_tl_id']=$segr_tl[1]; 
	$input['applicant_name']=Auth::user()->first_name." ".Auth::user()->last_name; 
	$input['applicant_id']=Auth::user()->id;
	$input['Status_updated_by']=Auth::user()->first_name." ".Auth::user()->last_name; 
	$input['status']="pending"; 
	//$app_short_leave=short_leave::create($input);
//$input = Input::all();
	//var_dump($input);die;
	$te_mem_id=Auth::user()->id;
	//$tm_detail_points=point::where('team_member_id', '=', $te_mem_id )->get();
	
	$today = Carbon::today();
	
	//start test script
	
	$fromd = $input['start_time'];
	$segr_fromdate= (explode(":",$fromd));
	//echo $segr_fromdate[0]."<br>";
	//echo $segr_fromdate[1]."<br>";
	//echo $segr_fromdate[2]."<br>";
	$tomd = $input['end_time'];
	$segr_tomdate= (explode(":",$tomd));
	//echo $segr_tomdate[0]."<br>";
	//echo $segr_tomdate[1]."<br>";
	//echo $segr_tomdate[2]."<br>";
	//var_dump($input);
$from_time	= Carbon::now();
$to_time	= Carbon::now();
	$from_time->hour($segr_fromdate[0])->minute($segr_fromdate[1])->second($segr_fromdate[2])->toDateTimeString();
	//$from_date->toDateString();
	//echo $from_time; 
$to_time->hour($segr_tomdate[0])->minute($segr_tomdate[1])->second($segr_tomdate[2])->toDateTimeString();
	//end test script
	//echo "</br>". $to_time;die;
	 $input['start_time']=$from_time;
	   $input['end_time']=$to_time;
	   $app_short_leave=short_leave::create($input);
	   $te_mem_id=Auth::user()->id;
	   echo "ok";
	   //die;
	   
	
	//$input = Input::all();
//$user = Auth::user();
//$input['team_lead_id']=Auth::user()->id;
//$proj =user::find($input['user_id_del']);
//var_dump($input);die;
//$input['status']="done";
//$update_status=point::create($input);
//		$proj->delete();
     // $user_points=point::all();
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	$tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	
	 $match_leaves=short_leave::where('applicant_id', '=', $te_mem_id)->where('status', '!=', 'Approved' )->where
	 ('status', '!=', 'cancelled')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tm_short_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die; 
	   
	 
	}
	
public function all_sh_leave_mem()
	{	$input=input::all();
	

$input = Input::all();
		$te_mem_id=Auth::user()->id;
	
	
	$today = Carbon::today();
	
	
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	
	$tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	
	  $match_leaves=short_leave::where('applicant_id', '=', $te_mem_id)->orderBy('id', 'desc')->get();
	
	 
	 return view('tm_short_leavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
		

	 
	}	
	public function cancelled_sh_leave_mem()
	{	$input = Input::all();
	//var_dump($input);die;
	$te_mem_id=Auth::user()->id;
	//$tm_detail_points=point::where('team_member_id', '=', $te_mem_id )->get();
	
	$today = Carbon::today();
	
	//$input = Input::all();
//$user = Auth::user();
//$input['team_lead_id']=Auth::user()->id;	
//$proj =user::find($input['user_id_del']);
//var_dump($input);die;
//$input['status']="done";
//$update_status=point::create($input);
//		$proj->delete();
     // $user_points=point::all();
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	$tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	
	  $match_leaves=short_leave::where('applicant_id', '=', $te_mem_id)->where('status', '=', 'cancelled' )->orderBy('id', 'desc')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tm_short_leavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  

	 
	}	
	public function approved_sh_leave_mem()
	{	$input = Input::all();
	//var_dump($input);die;
	$te_mem_id=Auth::user()->id;
	//$tm_detail_points=point::where('team_member_id', '=', $te_mem_id )->get();
	
	$today = Carbon::today();
	
	//$input = Input::all();
//$user = Auth::user();
//$input['team_lead_id']=Auth::user()->id;	
//$proj =user::find($input['user_id_del']);
//var_dump($input);die;
//$input['status']="done";
//$update_status=point::create($input);
//		$proj->delete();
     // $user_points=point::all();
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	$tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	
	  $match_leaves=short_leave::where('applicant_id', '=', $te_mem_id)->where('status', '=', 'approved' )->orderBy('id', 'desc')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tm_short_leavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  

	 
	}								
		
public function pending_sh_leave_mem()
	{	$input = Input::all();
	//var_dump($input);die;
	$te_mem_id=Auth::user()->id;
	//$tm_detail_points=point::where('team_member_id', '=', $te_mem_id )->get();
	
	$today = Carbon::today();
	
	//$input = Input::all();
//$user = Auth::user();
//$input['team_lead_id']=Auth::user()->id;	
//$proj =user::find($input['user_id_del']);
//var_dump($input);die;
//$input['status']="done";
//$update_status=point::create($input);
//		$proj->delete();
     // $user_points=point::all();
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	$tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	
	  $match_leaves=short_leave::where('applicant_id', '=', $te_mem_id)->where('status', '=', 'pending' )->orderBy('id', 'desc')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tm_short_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  

	 
	}	
public function edit_sh_leave()
    {
		$input=input::all();
	//var_dump($input);die;
		 $segr_forleave= (explode("-",$input['team_lead_for_approval']));
		  $input['approval_from_tl']=$segr_forleave[0];
	      $input['approval_from_tl_id']=$segr_forleave[1]; 
		   $start_time = Carbon::now();
 $end_time = Carbon::now();
 $start_time = Carbon::parse($input['start_time']);
$end_time = Carbon::parse($input['end_time']);
		//var_dump($input);die;
		$te_mem_id=Auth::user()->id;
		$te_mem_name=Auth::user()->first_name;
		$lv_id=$input['leave_id'];
		$leav_app =short_leave::find($lv_id);
		 $leav_app->leave_type = $input['leave_type'];
		  $leav_app->status = $input['status'];
		 $leav_app->Status_updated_by  =Auth::user()->first_name." ".Auth::user()->last_name;
		  $leav_app->applicant_comment = $input['applicant_comment'];
		   $leav_app->start_time = $start_time;
		    $leav_app->end_time = $end_time;
			 $leav_app->approval_from_tl = $input['approval_from_tl'];
			  $leav_app->approval_from_tl_id = $input['approval_from_tl_id'];
			    $leav_app->save();
		
		 $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	 $match_leaves=short_leave::where('applicant_id', '=', $te_mem_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	 
	 return view('tm_short_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	}


public function to_do_task_view()
	{	$input = Input::all();
	$pass_tsk_id=$input['task_id_detail'];
	$pass_tsk_name=$input['task_name_detail'];
	$pass_tsk_project=$input['task_proj_name'];
	$pass_tsk_tl_id=$input['task_tl_id'];
	$pass_tsk_tl_name=$input['task_tl_name'];
	
		$tl_id=Auth::user()->id;
		$match_todo_complete=to_dos_task::where('to_task_id', '=', $pass_tsk_id )->where('status', '=', 'complete')->get();
	
	 $match_todo=to_dos_task::where('to_task_id', '=', $pass_tsk_id )->where('status', '!=', 'cancelled')->get();
	 
	 return view('tm_todo_home',array('matched_todos'=>$match_todo,'task_id_detail'=>$pass_tsk_id,'task_name'=>$pass_tsk_name,'task_project_name'=>$pass_tsk_project,'task_tl_id'=>$pass_tsk_tl_id,'task_tl_name'=>$pass_tsk_tl_name,'comlete_todos'=>$match_todo_complete));  
	 
	   
	
	 
	}	
public function make_todo_task()
	{	$input = Input::all();
	//var_dump($input);die;
	$input['to_made_by_id']=Auth::user()->id;
	$input['to_made_by']=Auth::user()->first_name." ".Auth::user()->last_name;
	$input['status']='pending';
	$todos=to_dos_task::create($input);
	$tl_id=Auth::user()->id;
	
	$pass_tsk_id=$input['to_task_id'];
	$pass_tsk_name=$input['to_task_name'];
	$pass_tsk_project=$input['to_proj_name'];
	$pass_tsk_tl_id=$input['to_tl_id'];
	$pass_tsk_tl_name=$input['to_tl_name'];
    
	$match_todo_complete=to_dos_task::where('to_task_id', '=', $pass_tsk_id )->where('status', '=', 'complete')->get();
	
	 $match_todo=to_dos_task::where('to_task_id', '=', $pass_tsk_id )->where('status', '!=', 'cancelled' )->get();
	 
	 return view('tm_todo_home',array('matched_todos'=>$match_todo,'task_id_detail'=>$pass_tsk_id,'task_name'=>$pass_tsk_name,'task_project_name'=>$pass_tsk_project,'task_tl_id'=>$pass_tsk_tl_id,'task_tl_name'=>$pass_tsk_tl_name,'comlete_todos'=>$match_todo_complete));  
	 
	   
	

	 
	}															
public function edit_todo_status()
	{	$input = Input::all();
	//var_dump($input);die;
	$todo_id=$input['pass_todo_id'];
	$todo_edit =to_dos_task::find($todo_id);
		 $todo_edit->tm_comment = $input['tm_comment'];
		 $todo_edit->status = $input['status'];
		   $todo_edit->save();
	
	
	
	$tl_id=Auth::user()->id;
	
	$pass_tsk_id=$input['to_task_id'];
	$pass_tsk_name=$input['to_task_name'];
	$pass_tsk_project=$input['to_proj_name'];
	$pass_tsk_tl_id=$input['to_tl_id'];
	$pass_tsk_tl_name=$input['to_tl_name'];

	$match_todo_complete=to_dos_task::where('to_task_id', '=', $pass_tsk_id )->where('status', '=', 'complete')->get();
	 $match_todo=to_dos_task::where('to_task_id', '=', $pass_tsk_id )->where('status', '!=', 'cancelled' )->get();
	 
	 return view('tm_todo_home',array('matched_todos'=>$match_todo,'task_id_detail'=>$pass_tsk_id,'task_name'=>$pass_tsk_name,'task_project_name'=>$pass_tsk_project,'task_tl_id'=>$pass_tsk_tl_id,'task_tl_name'=>$pass_tsk_tl_name,'comlete_todos'=>$match_todo_complete));  
	 
	   
	

	 
	}	
public function all_todo_teammem()
	{	$input = Input::all();
	//var_dump($input);die;
	$tl_id=Auth::user()->id;
	
	$pass_tsk_id=$input['to_task_id'];
	$pass_tsk_name=$input['to_task_name'];
	$pass_tsk_project=$input['to_proj_name'];
	$pass_tsk_tl_id=$input['to_tl_id'];
	$pass_tsk_tl_name=$input['to_tl_name'];

	$match_todo_complete=to_dos_task::where('to_task_id', '=', $pass_tsk_id )->where('status', '=', 'complete')->get();
	 $match_todo=to_dos_task::where('to_task_id', '=', $pass_tsk_id )->get();
	 
	 return view('tm_todo_home',array('matched_todos'=>$match_todo,'task_id_detail'=>$pass_tsk_id,'task_name'=>$pass_tsk_name,'task_project_name'=>$pass_tsk_project,'task_tl_id'=>$pass_tsk_tl_id,'task_tl_name'=>$pass_tsk_tl_name,'comlete_todos'=>$match_todo_complete));  
	

	 
	}	
public function cancelled_todo_teammem()
	{	$input = Input::all();
	//var_dump($input);die;
	$tl_id=Auth::user()->id;
	
	$pass_tsk_id=$input['to_task_id'];
	$pass_tsk_name=$input['to_task_name'];
	$pass_tsk_project=$input['to_proj_name'];
	$pass_tsk_tl_id=$input['to_tl_id'];
	$pass_tsk_tl_name=$input['to_tl_name'];

	$match_todo_complete=to_dos_task::where('to_task_id', '=', $pass_tsk_id )->where('status', '=', 'complete')->get();
	 $match_todo=to_dos_task::where('to_task_id', '=', $pass_tsk_id )->where('status', '=', 'cancelled' )->get();
	 
	 return view('tm_todo_home',array('matched_todos'=>$match_todo,'task_id_detail'=>$pass_tsk_id,'task_name'=>$pass_tsk_name,'task_project_name'=>$pass_tsk_project,'task_tl_id'=>$pass_tsk_tl_id,'task_tl_name'=>$pass_tsk_tl_name,'comlete_todos'=>$match_todo_complete));  
	

	 
	}
public function completed_todo_teammem()
	{	$input = Input::all();
	//var_dump($input);die;
	$tl_id=Auth::user()->id;
	
	$pass_tsk_id=$input['to_task_id'];
	$pass_tsk_name=$input['to_task_name'];
	$pass_tsk_project=$input['to_proj_name'];
	$pass_tsk_tl_id=$input['to_tl_id'];
	$pass_tsk_tl_name=$input['to_tl_name'];

	$match_todo_complete=to_dos_task::where('to_task_id', '=', $pass_tsk_id )->where('status', '=', 'complete')->get();
	 $match_todo=to_dos_task::where('to_task_id', '=', $pass_tsk_id )->where('status', '=', 'complete')->get();
	 
	 return view('tm_todo_home',array('matched_todos'=>$match_todo,'task_id_detail'=>$pass_tsk_id,'task_name'=>$pass_tsk_name,'task_project_name'=>$pass_tsk_project,'task_tl_id'=>$pass_tsk_tl_id,'task_tl_name'=>$pass_tsk_tl_name,'comlete_todos'=>$match_todo_complete));  
	

	 
	}																
public function active_todo_teammem()
	{	$input = Input::all();
	//var_dump($input);die;
	$tl_id=Auth::user()->id;
	 //$today = Carbon::now();
	// echo $today;die;
	
	$pass_tsk_id=$input['to_task_id'];
	$pass_tsk_name=$input['to_task_name'];
	$pass_tsk_project=$input['to_proj_name'];
	$pass_tsk_tl_id=$input['to_tl_id'];
	$pass_tsk_tl_name=$input['to_tl_name'];

	$match_todo_complete=to_dos_task::where('to_task_id', '=', $pass_tsk_id )->where('status', '=', 'complete')->get();
	 $match_todo=to_dos_task::where('to_task_id', '=', $pass_tsk_id )->where('status', '=', 'pending')->get();
	 
	 return view('tm_todo_home',array('matched_todos'=>$match_todo,'task_id_detail'=>$pass_tsk_id,'task_name'=>$pass_tsk_name,'task_project_name'=>$pass_tsk_project,'task_tl_id'=>$pass_tsk_tl_id,'task_tl_name'=>$pass_tsk_tl_name,'comlete_todos'=>$match_todo_complete));  
	

	 
	}	
public function start_task_timer()
	{	$input = Input::all();
	//var_dump($input);die;
	$tl_id=Auth::user()->id;
	 $today = Carbon::now();
	   $now_time= Carbon::now();
	     $for_flag_starttime= Carbon::now();
	//$flag_id=$input['flag_usr_id'];
	//$leav_app =leave::find($lv_id);
	 //$today = Carbon::now();
	// echo $today;die;
	$flag_user_id=$input['flag_usr_id'];
	 $now_time_record = Carbon::now();
	$flagfind=flag_task::where('usr_id','=',$flag_user_id )->first();
	
	$flagfind->task_name=$input['flag_task_name'];
	$flagfind->task_id=$input['flag_task_id'];
	$flagfind->flag_status=1;
	
	$flagfind->flag_start_time=$now_time_record;
	
	
	
	$flagfind->save();
	
	
	
	
	
	
	
	$diff_for_timer=task::where('id','=',$input['flag_task_id'])->first();
	$diff_in_hours=$diff_for_timer->task_total_time;
	$prev_diff_in_seconds=$diff_in_hours*60*60;
	//echo $diff_in_seconds;
	//echo "done";die;
	

	
	 $tl_id=Auth::user()->id;
	   $today = Carbon::now();
  $pending_task_countp=task::where('status', '=', 'pending' )->where
 ('task_expected_comp_date', '<',  $today)->where('assgn_to_id', '=',  $tl_id)->count();
 
	 $match_tasks=task::where('status', '!=', 'complete' )->where('status', '!=', 'cancelled')->where
	 ('assgn_to_id', '=',  $tl_id)->get();
		// $team_member=teammember::where('mem_team_made_by_id', '=', $tl_id )->get();
	  //$team_project=project::where('proj_assign_to_id', '=', $tl_id )->get();
	  $match_users=user::where('id', '=',  $tl_id)->get();
	  $chk_flag=flag_task::where('usr_id', '=', $tl_id)->first();
	  $for_flag_starttime=Carbon::parse($chk_flag->flag_start_time);
		$total_diff_current=$for_flag_starttime->diffInSeconds($now_time);
		
		$diff_in_seconds=$total_diff_current+$prev_diff_in_seconds;
	  
	  
	  
	 
	 return view('tmhome',array('matched_tasks'=>$match_tasks,'matched_users'=>$match_users,'pending_task_count'=>$pending_task_countp,'flag_stat'=>$chk_flag,'differ_in_sec'=>$diff_in_seconds,'flag_task_details'=>$chk_flag));  
	

	 
	}
public function stop_task_timer()
	{	$input = Input::all();
//var_dump($input);die;
	$tl_id=Auth::user()->id;
	 $today = Carbon::now();
	   $now_time= Carbon::now();
	   $crnt_time= Carbon::now();
	   
	    $flag_start_time= Carbon::now();
	     $for_flag_starttime= Carbon::now();
		 
		 $for_flag_starttime=Carbon::parse($input['flag_task_start_time']);
		 $total_diff_current=$for_flag_starttime->diffInSeconds($crnt_time);
		// echo  $total_diff_current;die;
		// var_dump($for_flag_starttime);die;
		 
	//$flag_id=$input['flag_usr_id'];
	//$leav_app =leave::find($lv_id);
	 //$today = Carbon::now();
	// echo $today;die;
	$flag_user_id=$input['flag_user_id'];
	 $now_time_record = Carbon::now();
	$flagfind=flag_task::where('usr_id','=',$flag_user_id )->first();
	
	//$flagfind->task_name=$input['flag_task_name'];
	//$flagfind->task_id=$input['flag_task_id'];
	$flagfind['flag_status']=0;
	
	//$flagfind->flag_start_time=$now_time_record;
	
	
	
	$flagfind->save();
	
	
	
	
	
	
	
	$diff_for_timer=task::where('id','=',$input['task_id'])->first();
	$diff_in_hours=$diff_for_timer->task_total_time;
	$prev_diff_in_seconds=$diff_in_hours*60*60;
	$total_diff_for_task=$prev_diff_in_seconds+$total_diff_current;
	$total_diff_for_task=$total_diff_for_task/3600;
	$diff_for_timer->task_total_time=$total_diff_for_task;
	// echo  $total_diff_for_task;die;
	//echo $diff_in_seconds;
	//echo "done";die;
	$diff_for_timer->save();
	

	
	 $tl_id=Auth::user()->id;
	   $today = Carbon::now();
  $pending_task_countp=task::where('status', '=', 'pending' )->where
 ('task_expected_comp_date', '<',  $today)->where('assgn_to_id', '=',  $tl_id)->count();
 
	 $match_tasks=task::where('status', '!=', 'complete' )->where('status', '!=', 'cancelled')->where
	 ('assgn_to_id', '=',  $tl_id)->get();
		// $team_member=teammember::where('mem_team_made_by_id', '=', $tl_id )->get();
	  //$team_project=project::where('proj_assign_to_id', '=', $tl_id )->get();
	  $match_users=user::where('id', '=',  $tl_id)->get();
	  $chk_flag=flag_task::where('usr_id', '=', $tl_id)->first();
	  $for_flag_starttime=Carbon::parse($chk_flag->flag_start_time);
		$total_diff_current=$for_flag_starttime->diffInSeconds($now_time);
		
		$diff_in_seconds=$total_diff_current+$prev_diff_in_seconds;
	  
	  
	  
	 
	 return view('tmhome',array('matched_tasks'=>$match_tasks,'matched_users'=>$match_users,'pending_task_count'=>$pending_task_countp,'flag_stat'=>$chk_flag,'differ_in_sec'=>$diff_in_seconds));  
	

	 
	}																							
																
																
	
}
