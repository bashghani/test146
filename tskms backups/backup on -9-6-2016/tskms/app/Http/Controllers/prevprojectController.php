<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\project;
use Hash;
use Session;
use Carbon\Carbon;
use App\point;
use App\task;
use App\Http\Requests;

class projectController extends Controller
{
    public function store(Request $request)
    {
      $input = Input::all();
	   
	  $this->validate( $request, [
            'project_name' => 'required|max:255',
			 'project_description' => 'required|max:255',
			 'proj_assigned_to' => 'required|max:255',
			 'start_date' => 'required|max:255',
              'expected_comp_date' => 'required|max:255',
        ]);
	  // echo "input is valid123456</br>";
	 //  $today = Carbon::today();
	 //  echo $today;die;
	   //$input['password']=bcrypt($input['password']);
	   //$user = Auth::user();
	  // $input['emp_id']=$user['id'];
	// $input['password'] = bcrypt($input['password']);
	$segr_forproj= (explode("-",$input['proj_assigned_to']));
	$input['assigned_to']=$segr_forproj[0];
	$input['proj_assign_to_id']=$segr_forproj[1]; 
	$input['proj_assign_by']=Auth::user()->first_name." ".Auth::user()->last_name;
	$input['proj_assign_by_id']=Auth::user()->id;
	   $nwproj=project::create($input);
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
		$match_projects=project::all();
		 $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 return view('pmhome44',array('matched_projects'=>$match_projects,'matched_tls'=>$tls_for_proj));  
	  // var_dump($input);die;
    } 
	public function ser_proj()
{
	$input = Input::all();
	//$update_id=$input['pass_id'];
	//$upstatus= $input['formstatus'];
	//$order = order::find($update_id);
    //$post = post::find(hire);
   //$order->status = $upstatus;
    //$order->save();
   // $order->status=;
   //$input = Input::all();
   //var_dump($input);die;
  
	 // $current_emp_id=Auth::user()->id;
	  //$juser_info=jobseeker::where('jsuser_id', '=', $current_emp_id )->get();
	// return view('home'); 
	 //return view('homeseek',array('forcv'=> $juser_info));  
  $ser_var =  $input['insearch'];
   //$detail_ord=Search::search(null, $ser_var )->get();
	 $match_projs= project::where('id', 'LIKE', '%'. $ser_var .'%')
        ->orWhere('project_name', 'LIKE', '%'. $ser_var .'%')
        ->orWhere('project_description', 'LIKE', '%'. $ser_var .'%')
		 ->orWhere('assigned_to', 'LIKE', '%'. $ser_var .'%')
		   ->get();
		
		//var_dump($match_jobs);
	//return view('dashboard',array('neword'=>$ord,'allord'=>$allord));
	// imp    Session::put('name', $input['pass_name']);
	/*return view('search',array('neword'=>$ord,'serc'=>$detail_ord,'allord'=>$allord,'compord'=>$compord,'ordcanc'=>$ordccancc));*/ 
	// return view('adminhome1234',array('matched_users'=>$match_users)); 
	 $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
		   return view('pmhome44',array('matched_projects'=>$match_projs,'matched_tls'=>$tls_for_proj));   
	  
	
}
public function edit_proj(Request $request)
    {
      $input = Input::all();
	   
	  $this->validate( $request, [
           'project_name' => 'required|max:255',
			 'project_description' => 'required|max:255',
			 'assigned_to' => 'required|max:255',
           'start_date' => 'required|max:255',
		    'expected_comp_date' => 'required|max:255',
        ]);
	   
	   //$input['password']=bcrypt($input['password']);
	   $user = Auth::user();
	   
	    //var_dump($input);die;
		
		$proj =project::find($input['proj_id']);
		
		
		 $proj->project_name = $input['project_name'];
		 $proj->project_description = $input['project_description'];
		 $proj->assigned_to = $input['assigned_to'];
		$proj->start_date = $input['start_date'];
		 $proj->expected_comp_date = $input['expected_comp_date'];
		
		  		 
		 
		//$jobb = $input;
		//$edit_jobs=$input;
		 $proj->save();
		 $match_project=project::all();
		  $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
		   return view('pmhome44',array('matched_projects'=>$match_project,'matched_tls'=>$tls_for_proj));  
		  
	 
	
		// var_dump($edit_jobs);die;
	//  $nwuser=jobb::create($input);
	  	//   $current_emp_id=Auth::user()->id;
	  // $frname = $request->input('formstatus');
	   //echo "$frname</br></br> value of user id is";
	   //echo $nwuser['id'];
	  // var_dump($request->name);
	   // return view('val');
	   //$input['name']='any';
	  // $emp_info= employer::where('user_id', '=', $current_emp_id )->get();
	   //$all_jobs_emp= jobb::where('emp_id', '=',  $current_emp_id )->paginate(4);
	   //return view('emphome1');
	 
	  // var_dump($input);die;
    } 
	public function delete()
{    $input = Input::all();
$user = Auth::user();
	   
	    //var_dump($input);die;
		
		$proj =project::find($input['proj_id_del']);
		$proj->delete();
		 $match_project=project::all();
		  $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
		   return view('pmhome44',array('matched_projects'=>$match_project,'matched_tls'=>$tls_for_proj));  
		  
		 
		    
	
}
public function pmanager_tm_points()
    {//echo "on detail points sys";
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
	 
	 return view('pmtmempoints',array('matched_users'=>$match_users,'users_points'=>$tm_detail_points,
	 'todays'=>$today));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die;
	
	
	}
	public function seruser_for_points_pm()
{
	$input = Input::all();
	//$update_id=$input['pass_id'];
	//$upstatus= $input['formstatus'];
	//$order = order::find($update_id);
    //$post = post::find(hire);
   //$order->status = $upstatus;
    //$order->save();
   // $order->status=;
   //$input = Input::all();
   //var_dump($input);die;
  
	 // $current_emp_id=Auth::user()->id;
	  //$juser_info=jobseeker::where('jsuser_id', '=', $current_emp_id )->get();
	// return view('home'); 
	 //return view('homeseek',array('forcv'=> $juser_info));
	   $ser_var="hadfahldsjfhaljf";
  $ser_var =  $input['insearch'];
   //$detail_ord=Search::search(null, $ser_var )->get();
	 $match_users= user::where('id', 'LIKE', $ser_var )
        ->orWhere('first_name', 'LIKE', '%'. $ser_var .'%')
        ->orWhere('last_name', 'LIKE', '%'. $ser_var .'%')
		 ->orWhere('email', 'LIKE', '%'. $ser_var .'%')
		  ->orWhere('dept', 'LIKE', '%'. $ser_var .'%')
		  ->Where('type_of', '=', 'team_member')
		   ->get();
			//$today = Carbon::today();
$today =Carbon::today();
	$tl_id=Auth::user()->id;
	$input = Input::all();
$user = Auth::user();
//$proj =user::find($input['user_id_del']);
//		$proj->delete();
	// $match_users=user::where('type_of', '=', 'team_member' )->get();
	  $user_points=point::all();
	  $total_task=task::where('task_assigned_by_id', '=',  $tl_id)->get();
	// return view('tlpointhome1111',array('matched_users'=>$match_users));
	return view('pm_pointhome1144',array('matched_users'=>$match_users,'all_tasks'=>$total_task,
	'users_points'=>$user_points,'todays'=>$today));  
		//var_dump($match_jobs);
	//return view('dashboard',array('neword'=>$ord,'allord'=>$allord));
	// imp    Session::put('name', $input['pass_name']);
	/*return view('search',array('neword'=>$ord,'serc'=>$detail_ord,'allord'=>$allord,'compord'=>$compord,'ordcanc'=>$ordccancc));*/ 
	 
	
}
public function pm_date_filter()
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
	 
	 return view('pmtmempoints',array('matched_users'=>$match_users,'users_points'=>$data_btwn_date,
	 'todays'=>$today));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die;
	
	
	}
public function ch_psw_pmanager_vw()
{    
		 return view('pmanager_ch_pswd');  
		 
		    
	
}
public function pmanager_points()
    {
	//$today = Carbon::today();
$today =Carbon::today();
	$tl_id=Auth::user()->id;
	$input = Input::all();
$user = Auth::user();
//$proj =user::find($input['user_id_del']);
//		$proj->delete();
	 $match_users=user::where('type_of', '=', 'team_member' )->get();
	  $user_points=point::all();
	  $total_task=task::where('task_assigned_by_id', '=',  $tl_id)->get();
	// return view('tlpointhome1111',array('matched_users'=>$match_users));
	return view('pm_pointhome1144',array('matched_users'=>$match_users,'all_tasks'=>$total_task,
	'users_points'=>$user_points,'todays'=>$today));  
	// return view('tlpointhome44',array('matched_users'=>$match_users,'users_points'=>$user_points));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die;
	
	
	} 
public function ch_psw_pmanager(Request $request)
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
	  // echo "input is valid123456</br>";
	   $user = Auth::user();
	   
	    //var_dump($input);die;
		
		$usr =User::find(Auth::user()->id);
		
		
		// $usr->first_name = $input['first_name'];
		// $usr->last_name = $input['last_name'];
		// $usr->type_of = $input['type_of'];
	//	$usr->email = $input['email'];
		 $usr->password = $input['password'];
		// $usr->dept = $input['dept'];
		  $usr->password = bcrypt($input['password']);
		 
		 
		//$jobb = $input;
		//$edit_jobs=$input;
		 $usr->save();
	   
	   
	   Session::flash('message', 'Your password has been changed sucessfully!'); 
	    $match_projects=project::all();
	 $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 return view('pmhome44',array('matched_projects'=>$match_projects,'matched_tls'=>$tls_for_proj));  
		 
		    
	}
}
}
