<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;
use Carbon\Carbon;
use App\User;
use App\point;
use App\project;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
//use DB;

use App\Http\Requests;

class tlController extends Controller
{
  public function store(Request $request)
    {
      $input = Input::all();
	//  var_dump($input);die;
	   
	 /* $this->validate( $request, [
            'project_name' => 'required|max:255',
			 'project_description' => 'required|max:255',
			 'assigned_to' => 'required|max:255',
			 'start_date' => 'required|max:255',
              'expected_comp_date' => 'required|max:255',
        ]);*/
	   echo "input is valid123456</br>";
	 //  $today = Carbon::today();
	 //  echo $today;die;
	   //$input['password']=bcrypt($input['password']);
	   //$user = Auth::user();
	  // $input['emp_id']=$user['id'];
	// $input['password'] = bcrypt($input['password']);
	$segr_fortask= (explode("-",$input['task_assigned_to']));
	$input['task_assigned_to']=$segr_fortask[0];
	$input['assgn_to_id']=$segr_fortask[1]; 
	$input['task_assigned_by']=Auth::user()->first_name." ".Auth::user()->last_name;
	$input['task_assigned_by_id']=Auth::user()->id;
	$input['status']="pending";
	//var_dump($input['assgn_to_id']);var_dump($input['task_assigned_to']);die;
	   $nwproj=task::create($input);
	  	  // $current_emp_id=Auth::user()->id;
		   $tl_id=Auth::user()->id;
	  // $frname = $request->input('formstatus');
	   //echo "$frname</br></br> value of user id is";
	   //echo $nwuser['id'];
	  // var_dump($request->name);
	   // return view('val');
	   //$input['name']='any';
	 //   $emp_info= employer::where('user_id', '=', $current_emp_id )->get();
	  // $all_jobs_emp= jobb::where('emp_id', '=',  $current_emp_id )->paginate(4);
	   //return view('emphome1');
	   // return view('emphome9999',array('all_jobs'=>$all_jobs_emp,'forlogo'=> $emp_info)); 
 $match_tasks=task::where('status', '!=', 'complete' )->where('status', '!=', 'cancelled')->where('task_assigned_by_id', '=',  $tl_id)->get();
		 $team_member=user::where('type_of', '=', "team_member" )->get();
	  $team_project=project::all();
	 
	 
	 return view('tlhome1111',array('matched_tasks'=>$match_tasks,'matched_team_members'=>$team_member,
	 'tl_projects'=> $team_project));  
	 
	  // var_dump($input);die;
    } 
public function alltasks()
 {	$tl_id=Auth::user()->id;
 $match_tasks=task::where('task_assigned_by_id', '=',  $tl_id)->get();
		 $team_member=user::where('type_of', '=', "team_member" )->get();
	  $team_project=project::all();
	   return view('tlhome1111',array('matched_tasks'=>$match_tasks,'matched_team_members'=>$team_member,
	 'tl_projects'=> $team_project));  
 
 
 }
 public function show_canceled_task()
 {	$tl_id=Auth::user()->id;
 $match_tasks=task::where('status', '=', 'cancelled' )->where('task_assigned_by_id', '=',  $tl_id)->get();
		 $team_member=user::where('type_of', '=', "team_member" )->get();
	  $team_project=project::all();
	   return view('tlhome1111',array('matched_tasks'=>$match_tasks,'matched_team_members'=>$team_member,
	 'tl_projects'=> $team_project));  
 
 
 }
 public function show_current_task()
 {	$tl_id=Auth::user()->id;
  $match_tasks=task::where('status', '!=', 'complete' )->where('status', '!=', 'cancelled')->where('task_assigned_by_id', '=',  $tl_id)->get();
		 $team_member=user::where('type_of', '=', "team_member" )->get();
	  $team_project=project::all();
	 
	 return view('tlhome1111',array('matched_tasks'=>$match_tasks,'matched_team_members'=>$team_member,
	 'tl_projects'=> $team_project));  
	  
 
 
 }
 public function show_completed_task()
 {	$tl_id=Auth::user()->id;
 $match_tasks=task::where('status', '=', 'complete' )->where('task_assigned_by_id', '=',  $tl_id)->get();
		 $team_member=user::where('type_of', '=', "team_member" )->get();
	  $team_project=project::all();
	   return view('tlhome1111',array('matched_tasks'=>$match_tasks,'matched_team_members'=>$team_member,
	 'tl_projects'=> $team_project));  
 
 
 }
	
public function comp_task_status()
    {
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
	   
	 /* $this->validate( $request, [
            'project_name' => 'required|max:255',
			 'project_description' => 'required|max:255',
			 'assigned_to' => 'required|max:255',
			 'start_date' => 'required|max:255',
              'expected_comp_date' => 'required|max:255',
        ]);*/
	   echo "input is valid123456</br>";
	 //  $today = Carbon::today();
	 //  echo $today;die;
	   //$input['password']=bcrypt($input['password']);
	   //$user = Auth::user();
	  // $input['emp_id']=$user['id'];
	// $input['password'] = bcrypt($input['password']);
	/* $segr_fortask= (explode("-",$input['task_assigned_to']));
	$input['task_assigned_to']=$segr_fortask[0];
	$input['assgn_to_id']=$segr_fortask[1]; 
	$input['task_assigned_by']=Auth::user()->first_name." ".Auth::user()->last_name;
	$input['task_assigned_by_id']=Auth::user()->id;
	$input['status']="pending";
	//var_dump($input['assgn_to_id']);var_dump($input['task_assigned_to']);die;
	   $nwproj=task::create($input); */
	  	  // $current_emp_id=Auth::user()->id;
		   
	  // $frname = $request->input('formstatus');
	   //echo "$frname</br></br> value of user id is";
	   //echo $nwuser['id'];
	  // var_dump($request->name);
	   // return view('val');
	   //$input['name']='any';
	 //   $emp_info= employer::where('user_id', '=', $current_emp_id )->get();
	  // $all_jobs_emp= jobb::where('emp_id', '=',  $current_emp_id )->paginate(4);
	   //return view('emphome1');
	   // return view('emphome9999',array('all_jobs'=>$all_jobs_emp,'forlogo'=> $emp_info)); 
	$match_tasks=task::where('status', '!=', 'complete' )->where('status', '!=', 'cancelled')->where('task_assigned_by_id', '=',  $tl_id)->get();
		 $team_member=user::where('type_of', '=', "team_member" )->get();
	  $team_project=project::all();
	 
	 return view('tlhome1111',array('matched_tasks'=>$match_tasks,'matched_team_members'=>$team_member,
	 'tl_projects'=> $team_project));  
	 
	  // var_dump($input);die;
    } 	
	
	
 public function points()
    {
	//$today = Carbon::today();
$today =Carbon::today();
	$tl_id=Auth::user()->id;
	$input = Input::all();
$user = Auth::user();
//$proj =user::find($input['user_id_del']);
//		$proj->delete();
//$match_users=DB::table('users')
  //      ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
    //    ->get();
	 $match_users=user::where('type_of', '=', "team_member" )->get();
	  $user_points=point::all();
	  $total_task=task::where('task_assigned_by_id', '=',  $tl_id)->get();
	// return view('tlpointhome1111',array('matched_users'=>$match_users));
	return view('tlpointhome45667',array('matched_users'=>$match_users,'all_tasks'=>$total_task,
	'users_points'=>$user_points,'todays'=>$today));  
	// return view('tlpointhome44',array('matched_users'=>$match_users,'users_points'=>$user_points));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die;
	
	
	}
public function upd_point_status()
    {echo "on points sys";
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
	   $total_task=task::all();
	 $match_users=user::where('type_of', '=', "team_member" )->get();
	 
	 return view('tlpointhome45667',array('matched_users'=>$match_users,'all_tasks'=>$total_task,
	 'users_points'=>$user_points,'todays'=>$today));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die;
	
	
	}

public function tm_points()
    {echo "on detail points sys";
	$input = Input::all();
	//var_dump($input);die;
	$te_mem_id=$input['user_id_detail'];
	$tm_detail_points=point::where('team_member_id', '=', $te_mem_id )->get();
	
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
	 
	 return view('tmempoints456789',array('matched_users'=>$match_users,'users_points'=>$tm_detail_points,
	 'todays'=>$today));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die;
	
	
	}
	
	
	public function date_filter()
    {
	$input = Input::all();
	$fromd = $input['fromdate'];
	$segr_fromdate= (explode("/",$fromd));
	//echo $segr_fromdate[0]."<br>";
	//echo $segr_fromdate[1]."<br>";
	//echo $segr_fromdate[2]."<br>";
	$tomd = $input['todate'];
	$segr_tomdate= (explode("/",$tomd));
	//echo $segr_tomdate[0]."<br>";
	//echo $segr_tomdate[1]."<br>";
	//echo $segr_tomdate[2]."<br>";
	//var_dump($input);
$from_date	= Carbon::now();
$to_date	= Carbon::now();
	$from_date->year($segr_fromdate[2])->month($segr_fromdate[0])->day($segr_fromdate[1])->hour(0)->minute(0)->second(0)->toDateTimeString();
$to_date->year($segr_tomdate[2])->month($segr_tomdate[0])->day($segr_tomdate[1])->hour(0)->minute(0)->second(0)->toDateTimeString();
//echo "on it";
//echo $from_date;
//echo "on it";
//echo "on it";
//echo $to_date;
$te_mem_id=$input['user_id_data']; 

//echo "</br to date>".$to_date."</br>";
//echo "on it down listdated is new </br>";
$data_btwn_date=
point::where('created_at','>',$from_date)->where('created_at','<',$to_date)->where('team_member_id','=',$te_mem_id)->get();


	//$te_mem_id=$input['user_id_detail'];
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
	 
	 return view('tmempoints456789',array('matched_users'=>$match_users,'users_points'=>$data_btwn_date,
	 'todays'=>$today));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die;
	
	
	}
	public function showTeam()
    {echo "on team function";	
	//$input = Input::all();
	//var_dump($input);die;
//	$te_mem_id=$input['user_id_detail'];
	$tm_detail_points=point::where('team_member_id', '=', 11 )->get();
	$tm_members=user::where('type_of', '=', 'team_member' )->get();
	
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
	 $projects=project::all();
	 $match_users=user::where('id', '=', 11)->get();
	 
	 return view('tmaketeam11',array('matched_users'=>$match_users,'users_points'=>$tm_detail_points,
	 'todays'=>$today,'match_tm'=>$tm_members,'match_proj'=>$projects));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die;
	
	
	}
	public function makeTeam()
    {echo "on  function";
	$input=input::all();
		
	//$input = Input::all();
	var_dump($input);
	echo "before die";
	foreach ($character[] as $value) {
    echo $value."</br>";
} die;
//	$te_mem_id=$input['user_id_detail'];
	$tm_detail_points=point::where('team_member_id', '=', 11 )->get();
	$tm_members=user::where('type_of', '=', 'team_member' )->get();
	
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
	 $projects=project::all();
	 $match_users=user::where('id', '=', 11)->get();
	 
	 return view('tmaketeam11',array('matched_users'=>$match_users,'users_points'=>$tm_detail_points,
	 'todays'=>$today,'match_tm'=>$tm_members,'match_proj'=>$projects));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die;
	
	
	}
	
}
