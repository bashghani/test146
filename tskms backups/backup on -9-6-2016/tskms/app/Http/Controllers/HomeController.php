<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\task;
use App\team;
use App\project;
use App\leave;
use Carbon\Carbon;
use App\teammember;
use App\flag_task;
use App\Http\Requests;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$user = Auth::user();
		 $usrid=$user['type_of'];
       // return view('home');
	   if(($usrid)==('admin'))
	 { 
	 $match_users=user::all();
	 
	 return view('adminhome1246',array('matched_users'=>$match_users));  
	 
	 
	 
	 }
	 if(($usrid)==('proj_manager'))
	 { 
	 $match_projects=project::all();
	 $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 $tl_id=Auth::user()->id;
 $today = Carbon::today();
  $pending_proj_countp=project::where('status', '=', 'pending' )->where
 ('expected_comp_date', '<',  $today)->where('proj_assign_by_id', '=',  $tl_id)->count();
	 
	 
	 return view('pmhome44',array('matched_projects'=>$match_projects,'matched_tls'=>$tls_for_proj,'pending_proj_count'=>$pending_proj_countp));  
	// return view('pmhome123');
	 
	 
	 }
	  if(($usrid)==('team_lead'))
	 { 
	  $tl_id=Auth::user()->id;
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
	  if(($usrid)==('team_member'))
	 {
	 //Auth::logout();
       //       return redirect('/home'); 
	 
	 //return view('teammem_test');  
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
    }
	public function notelig()
    {
		Auth::logout();
              return redirect('/home'); 
		 // return view('tlhome3456',array('matched_tasks'=>$match_tasks,'matched_team_members'=>$team_member,
	 //'tl_projects'=> $team_project));  
		
		}
}
