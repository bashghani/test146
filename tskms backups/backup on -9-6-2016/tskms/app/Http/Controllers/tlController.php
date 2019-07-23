<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;
use Carbon\Carbon;
use App\User;
use App\point;
use App\project;
use App\teammember;
use App\team;
use App\leave;
use App\short_leave;
use App\to_dos_task;
use DB;
use Hash;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

class tlController extends Controller
{
  public function store(Request $request)
    {
      $input = Input::all();
	 
	   
	 $this->validate( $request, [
            'task_name' => 'required|max:255',
			 'task_assigned_to' => 'required|max:255',
			 'task_description' => 'required|max:255',
			 'task_project_name' => 'required|max:255',
			 'assigned_on_date' => 'required|max:255',
              'task_expected_comp_date' => 'required|max:255',
        ]);
		$fromd = $input['assigned_on_date'];
	$segr_fromdate= (explode("-",$fromd));
	
	$tomd = $input['task_expected_comp_date'];
	$segr_tomdate= (explode("-",$tomd));
$today = Carbon::now();	
$from_date	= Carbon::now();
$to_date	= Carbon::now();
	$from_date->year($segr_fromdate[0])->month($segr_fromdate[1])->day($segr_fromdate[2])->hour(0)->minute(0)->second(0)->toDateTimeString();
	//$from_date->toDateString();
	//echo $from_date;die;
$to_date->year($segr_tomdate[0])->month($segr_tomdate[1])->day($segr_tomdate[2])->hour(0)->minute(0)->second(0)->toDateTimeString();
	  
	$segr_fortask= (explode("-",$input['task_assigned_to']));
	$input['task_assigned_to']=$segr_fortask[0];
	$input['assgn_to_id']=$segr_fortask[1]; 
	$input['task_assigned_by']=Auth::user()->first_name." ".Auth::user()->last_name;
	$input['task_assigned_by_id']=Auth::user()->id;
	$input['status']="pending";
	$input['assigned_on_date']=$from_date;
	   $input['task_expected_comp_date']=$to_date;
	  $input['task_total_time']=0;
	  $tas=task::create($input);
	
	  
		  
		   $tl_id=Auth::user()->id;
	 
 $match_tasks=task::where('status', '!=', 'complete' )->where('status', '!=', 'cancelled')->where('task_assigned_by_id', '=',  $tl_id)->get();
		 $team_member=teammember::where('mem_team_made_by_id', '=', $tl_id )->get();
	  $team_project=project::where('proj_assign_to_id', '=', $tl_id )->get();
	  $coun_leaves=leave::where('approval_from_tl_id', '=',  $tl_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->count();
	 
	 $pending_task_countp=task::where('status', '=', 'pending' )->where
 ('task_expected_comp_date', '<',  $today)->where('task_assigned_by_id', '=',  $tl_id)->count();
	 return view('tlhome3456',array('matched_tasks'=>$match_tasks,'matched_team_members'=>$team_member,
	 'tl_projects'=> $team_project,'leaves_count'=>$coun_leaves,'pending_task_count'=>$pending_task_countp));  
	 
	  // var_dump($input);die;
    } 
public function alltasks()
 {	$tl_id=Auth::user()->id;
 $today = Carbon::now();
 $match_tasks=task::where('task_assigned_by_id', '=',  $tl_id)->get();
		 $team_member=teammember::where('mem_team_made_by_id', '=', $tl_id )->get();
	 $team_project=project::where('proj_assign_to_id', '=', $tl_id )->get();
	 
	 $coun_leaves=leave::where('approval_from_tl_id', '=',  $tl_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->count();
	 $pending_task_countp=task::where('status', '=', 'pending' )->where
 ('task_expected_comp_date', '<',  $today)->where('task_assigned_by_id', '=',  $tl_id)->count();
	   return view('tlhome3456',array('matched_tasks'=>$match_tasks,'matched_team_members'=>$team_member,
	 'tl_projects'=> $team_project,'leaves_count'=>$coun_leaves,'pending_task_count'=>$pending_task_countp));  
 
 
 }
 public function show_canceled_task()
 {	$tl_id=Auth::user()->id;
 $today = Carbon::now();
 $match_tasks=task::where('status', '=', 'cancelled' )->where('task_assigned_by_id', '=',  $tl_id)->get();
		$team_member=teammember::where('mem_team_made_by_id', '=', $tl_id )->get();
	 $team_project=project::where('proj_assign_to_id', '=', $tl_id )->get();
	 $coun_leaves=leave::where('approval_from_tl_id', '=',  $tl_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->count();
	 $pending_task_countp=task::where('status', '=', 'pending' )->where
 ('task_expected_comp_date', '<',  $today)->where('task_assigned_by_id', '=',  $tl_id)->count();
	 
	   return view('tlhome3456',array('matched_tasks'=>$match_tasks,'matched_team_members'=>$team_member,
	 'tl_projects'=> $team_project,'leaves_count'=>$coun_leaves,'pending_task_count'=>$pending_task_countp));  
 
 
 }
 public function show_current_task()
 {	$tl_id=Auth::user()->id;
 $today = Carbon::now();
  $match_tasks=task::where('status', '!=', 'complete' )->where('status', '!=', 'cancelled')->where('task_assigned_by_id', '=',  $tl_id)->get();
		$team_member=teammember::where('mem_team_made_by_id', '=', $tl_id )->get();
	 $team_project=project::where('proj_assign_to_id', '=', $tl_id )->get();
	 $coun_leaves=leave::where('approval_from_tl_id', '=',  $tl_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->count();
	 $pending_task_countp=task::where('status', '=', 'pending' )->where
 ('task_expected_comp_date', '<',  $today)->where('task_assigned_by_id', '=',  $tl_id)->count();
	 return view('tlhome3456',array('matched_tasks'=>$match_tasks,'matched_team_members'=>$team_member,
	 'tl_projects'=> $team_project,'leaves_count'=>$coun_leaves,'pending_task_count'=>$pending_task_countp));  
	  
 
 
 }
 public function show_completed_task()
 {	$tl_id=Auth::user()->id;
 $today = Carbon::now();
 $match_tasks=task::where('status', '=', 'complete' )->where('task_assigned_by_id', '=',  $tl_id)->get();
		 $team_member=teammember::where('mem_team_made_by_id', '=', $tl_id )->get();
	  $team_project=project::where('proj_assign_to_id', '=', $tl_id )->get();
	  $coun_leaves=leave::where('approval_from_tl_id', '=',  $tl_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->count();
	  $pending_task_countp=task::where('status', '=', 'pending' )->where
 ('task_expected_comp_date', '<',  $today)->where('task_assigned_by_id', '=',  $tl_id)->count();
	   return view('tlhome3456',array('matched_tasks'=>$match_tasks,'matched_team_members'=>$team_member,
	 'tl_projects'=> $team_project,'leaves_count'=>$coun_leaves,'pending_task_count'=>$pending_task_countp));  
 
 
 }
 public function show_overdue_tasks()
 {	$tl_id=Auth::user()->id;
  $today = Carbon::now();
  $pending_task_countp=task::where('status', '=', 'pending' )->where
 ('task_expected_comp_date', '<',  $today)->where('task_assigned_by_id', '=',  $tl_id)->count();
 $match_tasks=task::where('status', '=', 'pending' )->where
 ('task_expected_comp_date', '<',  $today)->where('task_assigned_by_id', '=',  $tl_id)->get();
		$team_member=teammember::where('mem_team_made_by_id', '=', $tl_id )->get();
	 $team_project=project::where('proj_assign_to_id', '=', $tl_id )->get();
	 $coun_leaves=leave::where('approval_from_tl_id', '=',  $tl_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->count();
	   return view('tlhome3456',array('matched_tasks'=>$match_tasks,'matched_team_members'=>$team_member,
	 'tl_projects'=> $team_project,'leaves_count'=>$coun_leaves,'pending_task_count'=>$pending_task_countp));  
 
 
 }
	
public function comp_task_status()
    {$today = Carbon::now();
      $input = Input::all();
	 $upstatus= $input['status'];
	  $up_comment= $input['task_comp_comment'];
	 $id_for_status=$input['id'];
	$task = task::find($id_for_status);
    //$post = post::find(hire);
    $task->status = $upstatus;
	$task->task_comp_comment = $up_comment;
    $task->save();
	$tl_id=Auth::user()->id;
  //  var_dump($input);die;
	   
	
	$match_tasks=task::where('status', '!=', 'complete' )->where('status', '!=', 'cancelled')->where('task_assigned_by_id', '=',  $tl_id)->get();
		$team_member=teammember::where('mem_team_made_by_id', '=', $tl_id )->get();
	$team_project=project::where('proj_assign_to_id', '=', $tl_id )->get();
	 $coun_leaves=leave::where('approval_from_tl_id', '=',  $tl_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->count();
	 
	 $pending_task_countp=task::where('status', '=', 'pending' )->where
 ('task_expected_comp_date', '<',  $today)->where('task_assigned_by_id', '=',  $tl_id)->count();
	 
	 return view('tlhome3456',array('matched_tasks'=>$match_tasks,'matched_team_members'=>$team_member,
	 'tl_projects'=> $team_project,'leaves_count'=>$coun_leaves,'pending_task_count'=>$pending_task_countp));  
	 
	  // var_dump($input);die;
    } 	
	
	
 public function points()
    {
	//$today = Carbon::today();
$today =Carbon::today();
	$tl_id=Auth::user()->id;
	$input = Input::all();
$user = Auth::user();

	 $match_users=teammember::where('mem_team_made_by_id', '=', $tl_id )->get();
	  $user_points=point::all();
	  $total_task=task::where('task_assigned_by_id', '=',  $tl_id)->where('status', '!=', 'cancelled' )
	  ->where('status', '!=', 'complete')->get();
	  $coun_leaves=leave::where('approval_from_tl_id', '=',  $tl_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->count();
	// return view('tlpointhome1111',array('matched_users'=>$match_users));
	return view('tlpointhome45447',array('matched_users'=>$match_users,'all_tasks'=>$total_task,
	'users_points'=>$user_points,'todays'=>$today,'leaves_count'=>$coun_leaves));  
	
	
	
	}
public function upd_point_status()
    {
	$tl_id=Auth::user()->id;
	$today = Carbon::today();
	$input = Input::all();
$user = Auth::user();
$input['team_lead_id']=Auth::user()->id;
$input['Evaluated_by']=Auth::user()->first_name ." ".Auth::user()->last_name;
//$proj =user::find($input['user_id_del']);
//var_dump($input);die;
$input['status']="done";
$update_status=point::create($input);
//		$proj->delete();
      $user_points=point::all();
	   $total_task=task::where('task_assigned_by_id', '=',  $tl_id)->get();
	 $match_users=teammember::where('mem_team_made_by_id', '=', $tl_id )->get();
	 $coun_leaves=leave::where('approval_from_tl_id', '=',  $tl_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->count();
	 
	 return view('tlpointhome45447',array('matched_users'=>$match_users,'all_tasks'=>$total_task,
	 'users_points'=>$user_points,'todays'=>$today,'leaves_count'=>$coun_leaves));  
	
	
	
	}
public function tm_points()
    {
	$input = Input::all();
	$tl_id=Auth::user()->id;
	//var_dump($input);die;
	$te_mem_id=$input['user_id_detail'];
	$tm_detail_points=point::where('team_member_id', '=', $te_mem_id )->where('team_lead_id', '=', $tl_id )->get();
	
	$today = Carbon::today();
	
	
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 
	 return view('tmempoints45678',array('matched_users'=>$match_users,'users_points'=>$tm_detail_points,
	 'todays'=>$today));  
	 
	
	}
	
	
	public function date_filter()
    {
	$input = Input::all();
	$fromd = $input['fromdate'];
	$segr_fromdate= (explode("/",$fromd));
	
	$tomd = $input['todate'];
	$segr_tomdate= (explode("/",$tomd));
	
$from_date	= Carbon::now();
$to_date	= Carbon::now();
	$from_date->year($segr_fromdate[2])->month($segr_fromdate[0])->day($segr_fromdate[1])->hour(0)->minute(0)->second(0)->toDateTimeString();
$to_date->year($segr_tomdate[2])->month($segr_tomdate[0])->day($segr_tomdate[1])->hour(0)->minute(0)->second(0)->toDateTimeString();

$te_mem_id=$input['user_id_data']; 


$data_btwn_date=
point::where('created_at','>',$from_date)->where('created_at','<',$to_date)->where('team_member_id','=',$te_mem_id)->get();


	
	
	$today = Carbon::today();
	
	
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 
	 return view('tmempoints45678',array('matched_users'=>$match_users,'users_points'=>$data_btwn_date,
	 'todays'=>$today));  
	
	
	
	}
	public function showTeam()
    {
	
	$tm_detail_points=point::where('team_member_id', '=', 11 )->get();
	$tm_members=user::where('type_of', '=', 'team_member' )->get();
	
	$today = Carbon::today();
	
	
	 $tl_id=Auth::user()->id;
	 $projects=project::where('proj_assign_to_id', '=', $tl_id )->get();
	
	 
	$matched_team=team::where('team_made_by_id','=', $tl_id)->get();
	
	 return view('tmaketeam1111',array('users_points'=>$tm_detail_points,
	 'todays'=>$today,'match_tm'=>$tm_members,'match_proj'=>$projects,'teams_matched'=>$matched_team));  
	 
	
	
	}
	
	public function makeTeam()
    {
	$input = Input::all();
	//var_dump($input);die;
	$characters=$input['character'];
	$arrlength = count($characters);
	$input['team_made_by_id']=Auth::user()->id;
	$input['team_made_by']=Auth::user()->first_name;
	$segr_team_proj= (explode("--",$input['team_proj_name']));
	$input['team_proj_name']=$segr_team_proj[0];
	$input['team_project_id']=$segr_team_proj[1]; 
	$input['status']='done';
 // echo"</br>project".$segr_team_proj[0];
  //echo"</br>".$segr_team_proj[1];
   $mkteam=team::create($input);
  // echo"id is </br>";
 //  echo $mkteam['id'];die;
   
for($x = 0; $x < $arrlength; $x++) {
	$segr_team_mem= (explode("-",$characters[$x]));
	$input['member_name']=$segr_team_mem[0];
	$input['member_id']=$segr_team_mem[1]; 
	$input['mem_team_made_by_id']=Auth::user()->id;
	$input['mem_team_made_by']=Auth::user()->first_name;
	$input['mem_team_project_id']=$segr_team_proj[1]; 
	$input['mem_team_name']=$input['team_name'];
	$input['mem_team_id']=$mkteam['id'];
	$mkteam_mem=teammember::create($input);
	
	
  //  echo $segr_team_mem[1]."down name";
	// echo $segr_team_mem[0];
	
    //echo "<br>".$input['team_name']."<br>";	
}
	$upprojstatus = project::find($segr_team_proj[1]);
    //$post = post::find(hire);
    $upprojstatus->status = "done";
    $upprojstatus->save();
//	$te_mem_id=$input['user_id_detail'];
	$tm_detail_points=point::where('team_member_id', '=', 11 )->get();
	$tm_members=user::where('type_of', '=', 'team_member' )->get();
	
	
	$today = Carbon::today();
	
	
	 $tl_id=Auth::user()->id;
	 $projects=project::where('proj_assign_to_id', '=', $tl_id )->get();
	
	 $matched_team=team::where('team_made_by_id','=', $tl_id)->get();
	 
	 return view('tmaketeam1111',array('users_points'=>$tm_detail_points,
	 'todays'=>$today,'match_tm'=>$tm_members,'match_proj'=>$projects,'teams_matched'=>$matched_team));  
	
	
	
	}
	public function team_action_do()
	{
		$input=input::all();
		 $tl_id=Auth::user()->id;
		//var_dump($input);
		$from_user=user::where('type_of', '=', 'team_member' )->get();
		//$team_for_proj=teammember::where('mem_team_id','=',$tl_id)->get();
		//$team_details=team::where('team_made_by_id','=',$tl_id)->get();
		$team_for_proj=teammember::where('mem_team_made_by_id','=',$tl_id)->get();
		$team_details=team::where('team_made_by_id','=',$tl_id)->get();
		return view('actionteam2332',array('team_mem'=>$team_for_proj,'team_detail'=>$team_details,
		'users_tmm_all'=>$from_user));  
		
		
		
			}
	public function add_team_members()
	{
		$input=input::all();
		$characters=$input['character'];
	$arrlength = count($characters);
	
	for($x = 0; $x < $arrlength; $x++) {
	$segr_team_mem= (explode("-",$characters[$x]));
	$input['member_name']=$segr_team_mem[0];
	$input['member_id']=$segr_team_mem[1]; 
	$input['mem_team_made_by_id']=Auth::user()->id;
	$input['mem_team_made_by']=Auth::user()->first_name;
	
	
	
	$mkteam_mem=teammember::create($input);
	
	
  
}
 $tl_id=Auth::user()->id;
		$from_user=user::where('type_of', '=', 'team_member' )->get();
		$team_for_proj=teammember::where('mem_team_made_by_id','=',$tl_id)->get();
		$team_details=team::where('team_made_by_id','=',$tl_id)->get();
		return view('actionteam2332',array('team_mem'=>$team_for_proj,'team_detail'=>$team_details,
		'users_tmm_all'=>$from_user));  
		
		
		
		
		
		}
			
 public function tomaindash()
    {
	$tl_id=Auth::user()->id;
	 $match_tasks=task::where('status', '!=', 'complete' )->where('status', '!=', 'cancelled')->where('task_assigned_by_id', '=',  $tl_id)->get();
		 $team_member=teammember::where('mem_team_made_by_id', '=', $tl_id )->get();
	  $team_project=project::where('proj_assign_to_id', '=', $tl_id )->get();
	 
	 return view('tlhome3456',array('matched_tasks'=>$match_tasks,'matched_team_members'=>$team_member,
	 'tl_projects'=> $team_project));  
	 
	
	}
	public function ch_psw_teamlead_vw()
    {
		
		 return view('teamlead_ch_pswd'); 
	
	}
	public function ch_psw_teamlead(Request $request)
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
	 
	   $user = Auth::user();
	   
	   
		
		$usr =User::find(Auth::user()->id);
		
		
		
		 $usr->password = $input['password'];
		
		  $usr->password = bcrypt($input['password']);
		 
		
		 $usr->save();
	   
	   
	 
	   
	  $tl_id=Auth::user()->id;
	 $match_tasks=task::where('status', '!=', 'complete' )->where('status', '!=', 'cancelled')->where('task_assigned_by_id', '=',  $tl_id)->get();
	 $coun_leaves=leave::where('approval_from_tl_id', '=',  $tl_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->count();
		 $team_member=teammember::where('mem_team_made_by_id', '=', $tl_id )->get();
	  $team_project=project::where('proj_assign_to_id', '=', $tl_id )->get();
	 
	 return view('tlhome3456',array('matched_tasks'=>$match_tasks,'matched_team_members'=>$team_member,
	 'tl_projects'=> $team_project,'leaves_count'=>$coun_leaves));  
	   
	   
	   
	   
	
	
}
else{ 

// echo "notmatched";
 Session::flash('message', 'Current password mismatch!'); 
Session::flash('alert-class', 'alert-danger'); 
 return view('teamlead_ch_pswd');

     //die;
	 }
	}
	public function del_member()
 {	$tl_id=Auth::user()->id;
 $input=input::all();
 $delid=$input['user_id_del'];
 //var_dump( $input);die;
 $release_mem=teammember::where('mem_team_made_by_id', '=', $tl_id )->where('member_id', '=', $delid )->first();
 $for_del_id=$release_mem->id;
 $del_mem =teammember::find($for_del_id);
		$del_mem->delete();
		$from_user=user::where('type_of', '=', 'team_member' )->get();
		$team_for_proj=teammember::where('mem_team_made_by_id','=',$tl_id)->get();
		$team_details=team::where('team_made_by_id','=',$tl_id)->get();
		return view('actionteam2332',array('team_mem'=>$team_for_proj,'team_detail'=>$team_details,
		'users_tmm_all'=>$from_user));  
 
 
 }
 public function leave_mang_vw()
 {	
 $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	   $match_leaves=leave::where('approval_from_tl_id', '=', $te_mem_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
		 
	 return view('tlleave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	}
	public function all_leave_tl()
 {	
 $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	  $match_leaves=leave::where('approval_from_tl_id', '=', $te_mem_id)->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tlleavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	}
 public function cancel_leave_tl()
 {	
 $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	  $match_leaves=leave::where('approval_from_tl_id', '=', $te_mem_id)->where('status', '=', 'cancelled' )->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tlleavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	}
	public function approved_leave_tl()
 {	
 $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	  $match_leaves=leave::where('approval_from_tl_id', '=', $te_mem_id)->where('status', '=', 'approved' )->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tlleavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	}
	public function pending_leave_tl()
 {	
 $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	  $match_leaves=leave::where('approval_from_tl_id', '=', $te_mem_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tlleave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	}
  public function leave_mangement()
 {	$input=input::all();
// var_dump( $input);
 $today = Carbon::now();
 $start_date = Carbon::now();
 $end_date = Carbon::now();
 
$status_updated_by=Auth::user()->first_name." ".Auth::user()->last_name;
//echo $status_updated_by;die;
$start_date = Carbon::parse($input['start_date']);
$end_date = Carbon::parse($input['end_date']);
//$start_date->toDateString();
 $lv_id=$input['leave_id'];
		$leav_app =leave::find($lv_id);
		 $leav_app->leave_type = $input['leave_type'];
		  $leav_app->tl_comment = $input['tl_comment'];
		   $leav_app->start_date = $start_date;
		    $leav_app->end_date =  $end_date;
			 $leav_app->status = $input['status'];
			  $leav_app->Status_updated_by = $status_updated_by;
			 
			    $leav_app->save();
				
				
 $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	 $match_leaves=leave::where('approval_from_tl_id', '=', $te_mem_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	
	 
	 return view('tlleave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	}
	
	
	
	
	public function view_report_leave()
 {	$tl_id=Auth::user()->id;
 $input=input::all();
 $status_for=$input['status'];

$input = Input::all();
	$tl_id=Auth::user()->id;
	
	$te_mem_id=$input['user_id_detail'];
	$tm_detail_leaeves=leave::where('applicant_id', '=', $te_mem_id )->where('approval_from_tl_id', '=', $tl_id )->
	where('status', '=', $status_for )->get();
	
	
	$today = Carbon::today();
	
	
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 
	 return view('tl_rep_tmem_leave',array('matched_users'=>$match_users,'users_leaves'=>$tm_detail_leaeves,
	 'todays'=>$today,'status_fo'=>$status_for));  
	 //$user = Auth::user();
 
 
 }
 
	public function leave_datefilters()
 {	$tl_id=Auth::user()->id;
 $input=input::all();
//var_dump( $input);die;
  $today = Carbon::now();
 $start_date = Carbon::now();
 $end_date = Carbon::now();
 
$status_updated_by=Auth::user()->first_name." ".Auth::user()->last_name;
//echo $status_updated_by;die;
$start_date = Carbon::parse($input['start_date']);
$end_date = Carbon::parse($input['end_date']);
 $status_for=$input['status'];

	$te_mem_id=$input['user_id_data'];
	
	
	$tm_detail_leaeves=leave::where(function ($query)use ($te_mem_id, $tl_id,$status_for) {
    $query->where('approval_from_tl_id', '=', $tl_id )
	->where('applicant_id', '=', $te_mem_id )
         ->where('status', '=', $status_for );
})->where(function ($query)  use ($end_date, $start_date) {
    $query->where('end_date','>',$start_date)
        // ->where('start_date','>',$start_date)
		->whereBetween('start_date', array($start_date ,$end_date));
		  
})->get();
	
	
	
	
	
	
	
	
	
	$today = Carbon::today();
	
	
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 
	 return view('tl_rep_tmem_leave',array('matched_users'=>$match_users,'users_leaves'=>$tm_detail_leaeves,
	 'todays'=>$today,'status_fo'=>$status_for,'end_inp_date'=>$end_date));  
	 //$user = Auth::user();
 
 
 }
 
 public function short_leave_vw()
 {	$input=input::all();
//	var_dump($input); echo "on leave system";
//die;	
$input = Input::all();
	//var_dump($input);die;
	$te_mem_id=Auth::user()->id;

	
	$today = Carbon::today();
	
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	
	$tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	
	 $match_leaves=short_leave::where('approval_from_tl_id', '=', $te_mem_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	
	 
	 return view('tl_short_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	
	   
	}
public function mang_sh_leave()
 {	
 $input=input::all();
// var_dump( $input);
 $today = Carbon::now();
 $start_time = Carbon::now();
 $end_time = Carbon::now();
 //$chk=$input['end_date'];
//$today = Carbon::parse($chk);
 //echo $today;die; //var_dump($today); die;
//echo $today; die;
$status_updated_by=Auth::user()->first_name." ".Auth::user()->last_name;
//echo $status_updated_by;die;
$start_time = Carbon::parse($input['start_time']);
$end_time = Carbon::parse($input['end_time']);
//$start_date->toDateString();
 $lv_id=$input['leave_id'];
		$leav_app =short_leave::find($lv_id);
		 $leav_app->leave_type = $input['leave_type'];
		  $leav_app->tl_comment = $input['tl_comment'];
		   $leav_app->start_time = $start_time;
		    $leav_app->end_time =  $end_time;
			 $leav_app->status = $input['status'];
			  $leav_app->Status_updated_by = $status_updated_by;
			 //$leav_app->approval_from_tl = $input['approval_from_tl'];
			  //$leav_app->approval_from_tl_id = $input['approval_from_tl_id'];
			    $leav_app->save();
				
				
 $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	  $match_leaves=short_leave::where('approval_from_tl_id', '=', $te_mem_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tl_short_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
 
 
 }
 
 
 public function all_sh_leave()
 {	
 $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	  $match_leaves=short_leave::where('approval_from_tl_id', '=', $te_mem_id)->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tl_short_leavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	}
 public function can_sh_leave()
 { $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	  $match_leaves=short_leave::where('approval_from_tl_id', '=', $te_mem_id)->where('status', '=', 'cancelled' )->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tl_short_leavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  	
 
	}
public function appvd_sh_leave()
 {  	
 $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	  $match_leaves=short_leave::where('approval_from_tl_id', '=', $te_mem_id)->where('status', '=', 'approved' )->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tl_short_leavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	}
 public function pending_sh_leave()
 {  $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	  $match_leaves=short_leave::where('approval_from_tl_id', '=', $te_mem_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tl_short_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  	
 
	}
 public function view_report_sh_leave()
 {	$tl_id=Auth::user()->id;
 $input=input::all();
 $status_for=$input['status'];
// $delid=$input['user_id_del'];
 //var_dump( $input);die;
//$input = Input::all();
	$tl_id=Auth::user()->id;
	//var_dump($input);die;
	$te_mem_id=$input['user_id_detail'];
	$tm_detail_leaeves=short_leave::where('applicant_id', '=', $te_mem_id )->where('approval_from_tl_id', '=', $tl_id )->
	where('status', '=', $status_for )->get();
	
	
	$today = Carbon::today();
	
	
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 
	 return view('tl_rep_tmem_sh_leave',array('matched_users'=>$match_users,'users_leaves'=>$tm_detail_leaeves,
	 'todays'=>$today,'status_fo'=>$status_for));  
	 //$user = Auth::user();
 
 
 }
 public function sh_leave_datefilters()
 {	$tl_id=Auth::user()->id;
 $input=input::all();
//var_dump( $input);die;
  $today = Carbon::now();
 $start_date = Carbon::now();
 $end_date = Carbon::now();
 
$status_updated_by=Auth::user()->first_name." ".Auth::user()->last_name;
//echo $status_updated_by;die;
$start_date = Carbon::parse($input['start_date']);
$end_date = Carbon::parse($input['end_date']);
 $status_for=$input['status'];

	$te_mem_id=$input['user_id_data'];
	
	
	$tm_detail_leaeves=short_leave::where(function ($query)use ($te_mem_id, $tl_id,$status_for) {
    $query->where('approval_from_tl_id', '=', $tl_id )
	->where('applicant_id', '=', $te_mem_id )
         ->where('status', '=', $status_for );
})->where(function ($query)  use ($end_date, $start_date) {
    $query->where('end_time','>',$start_date)
        // ->where('start_date','>',$start_date)
		->whereBetween('start_time', array($start_date ,$end_date));
		  
})->get();
	
	
	
	
	
	
	
	
	
	$today = Carbon::today();
	
	
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 
	 return view('tl_rep_tmem_sh_leave',array('matched_users'=>$match_users,'users_leaves'=>$tm_detail_leaeves,
	 'todays'=>$today,'status_fo'=>$status_for,'end_inp_date'=>$end_date));  
	 //$user = Auth::user();
 
 
 }
 public function leave_show_vw_tl()
	{$input=input::all();
	//var_dump($input); echo "on leave system";
//die;	
$input = Input::all();
	//var_dump($input);die;
	$te_mem_id=Auth::user()->id;
	//$tm_detail_points=point::where('team_member_id', '=', $te_mem_id )->get();
	
	$today = Carbon::today();
	
	
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	$tls_for_proj=user::where('type_of', '=', 'admin')->get();
	
	 $match_leaves=leave::where('applicant_id', '=', $te_mem_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 	 return view('tl_apply_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die; 
	   
	 
	
	}
	public function apply_leave_tl()
    {
		$input=input::all();
		 $te_mem_id=Auth::user()->id;
		//var_dump($input);die;
		$fromd = $input['start_date'];
	$segr_fromdate= (explode("-",$fromd));
	
	$tomd = $input['end_date'];
	$segr_tomdate= (explode("-",$tomd));
	
$from_date	= Carbon::now();
$to_date	= Carbon::now();
	$from_date->year($segr_fromdate[0])->month($segr_fromdate[1])->day($segr_fromdate[2])->hour(0)->minute(0)->second(0)->toDateTimeString();
	//$from_date->toDateString();
	//echo $from_date;die;
$to_date->year($segr_tomdate[0])->month($segr_tomdate[1])->day($segr_tomdate[2])->hour(0)->minute(0)->second(0)->toDateTimeString();



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
	
	
	 $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	$tls_for_proj=user::where('type_of', '=', 'admin')->get();
	  $match_leaves=leave::where('applicant_id', '=', $te_mem_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tl_apply_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	  
	 
	   
	 
	
	}
	public function edit_apply_leave()
    {  
		$input=input::all();
	//var_dump($input);die;
		 $segr_forleave= (explode("-",$input['team_lead_for_approval']));
		  $input['approval_from_tl']=$segr_forleave[0];
	      $input['approval_from_tl_id']=$segr_forleave[1]; 
		   $start_date = Carbon::now();
 $end_date = Carbon::now();
 
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
	$tls_for_proj=user::where('type_of', '=', 'admin')->get();
	 $match_leaves=leave::where('applicant_id', '=', $te_mem_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tl_apply_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	}
	public function applied_all_leave_tl()
	{	//var_dump($input); echo "on leave system";
//die;	
$input = Input::all();
	//var_dump($input);die;
	$te_mem_id=Auth::user()->id;
	//$tm_detail_points=point::where('team_member_id', '=', $te_mem_id )->get();
	
	$today = Carbon::today();
	
	
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	$tls_for_proj=user::where('type_of', '=', 'admin')->get();
	
	  $match_leaves=leave::where('applicant_id', '=', $te_mem_id)->orderBy('id', 'desc')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tl_apply_leavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	 
	   
	 
	
	}
	public function applied_cancelled_leave_tl()
	{	//var_dump($input); echo "on leave system";
//die;	
$input = Input::all();
	//var_dump($input);die;
	$te_mem_id=Auth::user()->id;
	//$tm_detail_points=point::where('team_member_id', '=', $te_mem_id )->get();
	
	$today = Carbon::today();
	
	
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	$tls_for_proj=user::where('type_of', '=', 'admin')->get();
	
	  $match_leaves=leave::where('applicant_id', '=', $te_mem_id)->where('status', '=', 'cancelled' )->orderBy('id', 'desc')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tl_apply_leavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	 
	   
	 
	
	}
	public function applied_approved_leave_tl()
	{	//var_dump($input); echo "on leave system";
//die;	
$input = Input::all();
	//var_dump($input);die;
	$te_mem_id=Auth::user()->id;
	//$tm_detail_points=point::where('team_member_id', '=', $te_mem_id )->get();
	
	$today = Carbon::today();
	
	
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	$tls_for_proj=user::where('type_of', '=', 'admin')->get();
	
	  $match_leaves=leave::where('applicant_id', '=', $te_mem_id)->where('status', '=', 'Approved' )->orderBy('id', 'desc')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tl_apply_leavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	
	   
	 
	
	}
	public function applied_pending_leave_tl()
	{	//var_dump($input); echo "on leave system";
//die;	
$input = Input::all();
	//var_dump($input);die;
	$te_mem_id=Auth::user()->id;
	//$tm_detail_points=point::where('team_member_id', '=', $te_mem_id )->get();
	
	$today = Carbon::today();
	
	
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	$tls_for_proj=user::where('type_of', '=', 'admin')->get();
	
	  $match_leaves=leave::where('applicant_id', '=', $te_mem_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	  
	 
	 return view('tl_apply_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	 
	   
	 
	
	}
	public function tl_apply_short_leave_vw()
	{	$input=input::all();
//	var_dump($input); echo "on leave system";
//die;	
$input = Input::all();
	//var_dump($input);die;
	$te_mem_id=Auth::user()->id;
	//$tm_detail_points=point::where('team_member_id', '=', $te_mem_id )->get();
	
	$today = Carbon::today();
	
	
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	$tls_for_proj=user::where('type_of', '=', 'admin')->get();
	
	 $match_leaves=short_leave::where('applicant_id', '=', $te_mem_id)->where('status', '!=', 'approved' )->where('status', '!=', 'cancelled')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tl_apply_short_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	
	   
	 
	}
	public function tl_apply_short_leave()
	{	$input=input::all();
	
$segr_tl= (explode("-",$input['team_lead_for_approval']));
	$input['approval_from_tl']=$segr_tl[0];
	$input['approval_from_tl_id']=$segr_tl[1]; 
	$input['applicant_name']=Auth::user()->first_name." ".Auth::user()->last_name; 
	$input['applicant_id']=Auth::user()->id;
	$input['Status_updated_by']=Auth::user()->first_name." ".Auth::user()->last_name; 
	$input['status']="pending"; 
	
	$te_mem_id=Auth::user()->id;
	//$tm_detail_points=point::where('team_member_id', '=', $te_mem_id )->get();
	
	$today = Carbon::today();
	
	//start test script
	
	$fromd = $input['start_time'];
	$segr_fromdate= (explode(":",$fromd));
	
	$tomd = $input['end_time'];
	$segr_tomdate= (explode(":",$tomd));
	
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
	   
	
	
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	$tls_for_proj=user::where('type_of', '=', 'admin')->get();
	
	 $match_leaves=short_leave::where('applicant_id', '=', $te_mem_id)->where('status', '!=', 'Approved' )->where
	 ('status', '!=', 'cancelled')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tl_apply_short_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	 
	   
	 
	}
public function all_sh_leave_applied_tl()
	{	$input=input::all();
	

$input = Input::all();
		$te_mem_id=Auth::user()->id;
	
	
	$today = Carbon::today();
	
	
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	
	$tls_for_proj=user::where('type_of', '=', 'admin')->get();
	
	  $match_leaves=short_leave::where('applicant_id', '=', $te_mem_id)->orderBy('id', 'desc')->get();
	
	 
	 return view('tl_apply_short_leavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
		

	 
	}	
	public function cancelled_sh_leave_mem_applied_tl()
	{	$input = Input::all();
	
	$te_mem_id=Auth::user()->id;
	
	
	$today = Carbon::today();
	
	
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	
	$tls_for_proj=user::where('type_of', '=', 'admin')->get();
	
	  $match_leaves=short_leave::where('applicant_id', '=', $te_mem_id)->where('status', '=', 'cancelled' )->orderBy('id', 'desc')->get();
	
	 
	 return view('tl_apply_short_leavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  

	 
	}
public function approved_sh_leave_applied_tl()
	{	$input = Input::all();
	
	$te_mem_id=Auth::user()->id;
	
	
	$today = Carbon::today();
	
	
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	
	$tls_for_proj=user::where('type_of', '=', 'admin')->get();
	
	  $match_leaves=short_leave::where('applicant_id', '=', $te_mem_id)->where('status', '=', 'approved' )->orderBy('id', 'desc')->get();
	
	 
	 return view('tl_apply_short_leavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  

	 
	}							

 public function pending_sh_leave_applied_tl()
	{	$input = Input::all();
	//var_dump($input);die;
	$te_mem_id=Auth::user()->id;
	//$tm_detail_points=point::where('team_member_id', '=', $te_mem_id )->get();
	
	$today = Carbon::today();
	
	
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	
	$tls_for_proj=user::where('type_of', '=', 'admin')->get();
	
	  $match_leaves=short_leave::where('applicant_id', '=', $te_mem_id)->where('status', '=', 'pending' )->orderBy('id', 'desc')->get();
	
	 
	 return view('tl_apply_short_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  

	 
	}	
 public function tl_apply_edit_sh_leave()
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
	 $tls_for_proj=user::where('type_of', '=', 'admin')->get();
	 $match_leaves=short_leave::where('applicant_id', '=', $te_mem_id)->where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('tl_apply_short_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	}										
	
 public function view_to_dos_tl()
    {
		  //$input=input::all();
	//var_dump($input);die;
	$input = Input::all();
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
	
 
 
 }		
	

