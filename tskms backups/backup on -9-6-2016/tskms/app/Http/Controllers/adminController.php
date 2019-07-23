<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\employer;
use App\short_leave;
use App\User;
use App\teammember;
use App\leave;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\point;
use App\flag_task;
use App\task;
use Hash;
use Session;
use Closure;

class adminController extends Controller
{
	public function store(Request $request)
    {
      $input = Input::all();
	   
	  $this->validate( $request, [
            'first_name' => 'required|max:255',
			 'last_name' => 'required|max:255',
			 'type_of' => 'required|max:255',
             'password' => 'required|min:6|confirmed',
			'dept' => 'required|max:255',
        ]);
	  // echo "input is valid123456</br>";
	 //  $today = Carbon::today();
	 //  echo $today;die;
	   //$input['password']=bcrypt($input['password']);
	   //$user = Auth::user();
	  // $input['emp_id']=$user['id'];
	  $input['password'] = bcrypt($input['password']);
	   $nwuser=user::create($input);
	   $type= $nwuser->type_of;
	   $returned_id= $nwuser->id;
	   
	   if($type=="team_member"){
		  	   $input['usr_id']=$returned_id;
		   $input['flag_status']=0;
		  // $input['flag_start_time']=0;
		  // $input['flag_end_time']=0;
		   
		   
		  $updat_flag =flag_task::create($input);
		   
		   
		   }
	  			
		$match_users=user::all();
	 
	 return view('adminhome1246',array('matched_users'=>$match_users));  
	 
	  // var_dump($input);die;
    } 
	public function seruser()
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
	 $match_users= user::where('id', 'LIKE', $ser_var )
        ->orWhere('first_name', 'LIKE', '%'. $ser_var .'%')
        ->orWhere('last_name', 'LIKE', '%'. $ser_var .'%')
		 ->orWhere('email', 'LIKE', '%'. $ser_var .'%')
		  ->orWhere('dept', 'LIKE', '%'. $ser_var .'%')
		  ->orWhere('type_of', 'LIKE', '%'. $ser_var .'%')
		   ->get();
		
		//var_dump($match_jobs);
	//return view('dashboard',array('neword'=>$ord,'allord'=>$allord));
	// imp    Session::put('name', $input['pass_name']);
	/*return view('search',array('neword'=>$ord,'serc'=>$detail_ord,'allord'=>$allord,'compord'=>$compord,'ordcanc'=>$ordccancc));*/ 
	 return view('adminhome1246',array('matched_users'=>$match_users));  
	
}
public function seruser_for_points()
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
	return view('adminpointhome1144',array('matched_users'=>$match_users,'all_tasks'=>$total_task,
	'users_points'=>$user_points,'todays'=>$today));  
		//var_dump($match_jobs);
	//return view('dashboard',array('neword'=>$ord,'allord'=>$allord));
	// imp    Session::put('name', $input['pass_name']);
	/*return view('search',array('neword'=>$ord,'serc'=>$detail_ord,'allord'=>$allord,'compord'=>$compord,'ordcanc'=>$ordccancc));*/ 
	 
	
}
public function delete()
{
	$input = Input::all();
//$user = Auth::user();
$proj =user::find($input['user_id_del']);
		$proj->delete();
		 $match_users=user::all();
	 
	 return view('adminhome1246',array('matched_users'=>$match_users));  
			   


}
public function editUser(Request $request)
    {
      $input = Input::all();
	   
	  $this->validate( $request, [
           'first_name' => 'required|max:255',
			 'last_name' => 'required|max:255',
			 'type_of' => 'required|max:255',
          //  'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
			'dept' => 'required|max:255',
        ]);
	  // echo "input is valid54444</br>";
	   //$input['password']=bcrypt($input['password']);
	   $user = Auth::user();
	   
	    //var_dump($input);die;
		
		$usr =User::find($input['usr_id']);
		
		
		 $usr->first_name = $input['first_name'];
		 $usr->last_name = $input['last_name'];
		 $usr->type_of = $input['type_of'];
	//	$usr->email = $input['email'];
		 $usr->password = $input['password'];
		 $usr->dept = $input['dept'];
		  $usr->password = bcrypt($input['password']);
		 
		 
		//$jobb = $input;
		//$edit_jobs=$input;
		 $usr->save();
		 $match_users=user::all();
	 
	 return view('adminhome1246',array('matched_users'=>$match_users));  
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
	 public function ad_points()
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
	return view('adminpointhome1144',array('matched_users'=>$match_users,'all_tasks'=>$total_task,
	'users_points'=>$user_points,'todays'=>$today));  
	// return view('tlpointhome44',array('matched_users'=>$match_users,'users_points'=>$user_points));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die;
	
	
	} 
	public function ch_psw_admin_vw()
    {
		
		 return view('adm_ch_pswd'); 
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
	
public function ch_psw_admin(Request $request)
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
		   $usr->first_name = $input['first_name'];
		    $usr->last_name = $input['last_name'];
		 
		 
		//$jobb = $input;
		//$edit_jobs=$input;
		 $usr->save();
	   
	   
	   Session::flash('message', 'Your password has been changed Sucessfully!'); 
	   
	  $match_users=user::all();
	 
	 return view('adminhome1246',array('matched_users'=>$match_users));   
	   
	   
	   
	   
	
	
}
else{ 

 //echo "notmatched";
 Session::flash('message', 'Current password mismatch!'); 
Session::flash('alert-class', 'alert-danger'); 
 return view('adm_ch_pswd');

     //die;
	 }
	}	
public function ad_tm_points()
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
	 
	 return view('adtmempoints',array('matched_users'=>$match_users,'users_points'=>$tm_detail_points,
	 'todays'=>$today));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die;
	
	
	}
	public function ad_date_filter()
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
	 
	 return view('adtmempoints',array('matched_users'=>$match_users,'users_points'=>$data_btwn_date,
	 'todays'=>$today));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die;
	
	
	}
	public function toadmdash()
    
	 { 
	 $match_users=user::all();
	 
	 return view('adminhome1246',array('matched_users'=>$match_users));  
	 
      
    }
	public function leave_mg_vw()
    {
	$today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	   $match_leaves=leave::where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('admin_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	
	} 
	public function all_leave_app()
 {	
 $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	  $match_leaves=leave::all();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('admin_leavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	}
	public function cancelled_leave_app()
 {	$today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	  $match_leaves=leave::where('status', '=', 'cancelled' )->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('admin_leavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
 
	}
	public function approved_leave_app()
 {	
 
 
  $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	  $match_leaves=leave::where('status', '=', 'approved' )->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('admin_leavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
 
	}
	public function pending_leave_app()
 {	
 $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	  $match_leaves=leave::where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('admin_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	}
	
public function view_report_leave_admin()
 {	$tl_id=Auth::user()->id;
 $input=input::all();
 $status_for=$input['status'];
// $delid=$input['user_id_del'];
 //var_dump( $input);die;
$input = Input::all();
	$tl_id=Auth::user()->id;
	//var_dump($input);die;
	$te_mem_id=$input['user_id_detail'];
	$tm_detail_leaeves=leave::where('applicant_id', '=', $te_mem_id )->where('status', '=', $status_for )->get();
	
	
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
	 
	 return view('admin_rep_tmem_leave',array('matched_users'=>$match_users,'users_leaves'=>$tm_detail_leaeves,
	 'todays'=>$today,'status_fo'=>$status_for));  
	 //$user = Auth::user();
 
 
 }
 public function leave_datefilters_admin()
 {	
 $input=input::all();
 //var_dump($input);die;
 $tl_id=Auth::user()->id;
 $input=input::all();
//var_dump( $input);die;
  $today = Carbon::now();
 $start_date = Carbon::now();
 $end_date = Carbon::now();
 //$chk=$input['end_date'];
//$today = Carbon::parse($chk);
 //echo $today;die; //var_dump($today); die;
//echo $today; die;
$status_updated_by=Auth::user()->first_name." ".Auth::user()->last_name;
//echo $status_updated_by;die;
$start_date = Carbon::parse($input['start_date']);
$end_date = Carbon::parse($input['end_date']);
 $status_for=$input['status'];
//var_dump($status_for);die;
// $delid=$input['user_id_del'];
 //var_dump( $input);die;
//$input = Input::all();
//	$tl_id=Auth::user()->id;
	//var_dump($input);die;
	//var_dump($start_date);
	//echo "</br>";
	//echo $end_date;die;
	$te_mem_id=$input['user_id_data'];
	//$tm_detail_leaeves=leave::where('applicant_id', '=', $te_mem_id )->where('approval_from_tl_id', '=', $tl_id )->
	//where('status', '=', $status_for )->get();
	
/*	$tm_detail_leaeves=leave::where('end_date','<',$end_date)->where('start_date','>',$start_date)->where('applicant_id', '=', $te_mem_id )->where('approval_from_tl_id', '=', $tl_id )->where('status', '=', $status_for )->get(); */
	
	$tm_detail_leaeves=leave::where(function ($query)use ($te_mem_id, $tl_id,$status_for) {
    $query->where('applicant_id', '=', $te_mem_id )
	         ->where('status', '=', $status_for );
})->where(function ($query)  use ($end_date, $start_date) {
    $query->where('end_date','>',$start_date)
        // ->where('start_date','>',$start_date)
		->whereBetween('start_date', array($start_date ,$end_date));
		  
})->get();
	
	
	
	
	
	
	
	//var_dump($te_mem_id);die;
//	$tm_detail_leaeves=leave::where('applicant_id', '=', $te_mem_id )->where('approval_from_tl_id', '=', $tl_id )->
//	where('status', '=', $status_for )->where(->where('start_date','>',$start_date)->orWhere('end_date','<',$end_date))
//	->get();
//$tm_detail_leaeves=leave::where(function ($query) use($te_mem_id,$tl_id,$status_for) {
  //  $query->where('applicant_id', '=', $te_mem_id)
    //      ->where('approval_from_tl_id', '=', $tl_id);
		//  ->where('status', '=', $status_for );
//});
//->orWhere(function ($query) use($start_date,$end_date) {
  //  $query->where('start_date','>',$start_date)
    //      ->orWhere('end_date','<',$end_date);
//});
	//foreach ($tm_detail_leaeves as $value)
	//{ if(($value->start_date) >($start_date))
	//{	
	//	}
   
//} 
	
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
	 
	 return view('admin_rep_tmem_leave',array('matched_users'=>$match_users,'users_leaves'=>$tm_detail_leaeves,
	 'todays'=>$today,'status_fo'=>$status_for));  
	 //$user = Auth::user();
  
 }
 public function leave_mangement_admin()
 {	$input=input::all();
//var_dump( $input);
 $today = Carbon::now();
 $start_date = Carbon::now();
 $end_date = Carbon::now();
 //$chk=$input['end_date'];
//$today = Carbon::parse($chk);
 //echo $today;die; //var_dump($today); die;
//echo $today; die;
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
			 //$leav_app->approval_from_tl = $input['approval_from_tl'];
			  //$leav_app->approval_from_tl_id = $input['approval_from_tl_id'];
			    $leav_app->save();
				
				
 $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	  $match_leaves=leave::where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('admin_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves)); 
	
   
}
public function admin_short_leave_vw()
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
	
	 $match_leaves=short_leave::where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('admin_short_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	 //$user = Auth::user();
	// $current_emp_id=Auth::user()->id;
	 //echo  $current_emp_id;die; 
	   
	}
	public function mang_sh_leave_admin()
 {	//$input=input::all();
// var_dump($input);die;
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
	  $match_leaves=short_leave::where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('admin_short_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
 
 
 }
 public function admin_all_sh_leave()
 {	
 $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	  $match_leaves=short_leave::all();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('admin_short_leavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	}
public function can_sh_leave_admin()
 { $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	  $match_leaves=short_leave::where('status', '=', 'cancelled' )->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('admin_short_leavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  	
 
	}
public function appvd_sh_leave_admin()
 {  	
 $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	  $match_leaves=short_leave::where('status', '=', 'approved' )->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('admin_short_leavecan',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  
	}
 public function pending_sh_leave_admin()
 {  $today = Carbon::today();
	 $te_mem_id=Auth::user()->id;
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 $tls_for_proj=teammember::where('member_id', '=', $te_mem_id )->get();
	  $match_leaves=short_leave::where('status', '!=', 'Approved' )->where('status', '!=', 'cancelled')->get();
	// $tls_for_proj=user::where('type_of', '=', "team_lead" )->get();
	 
	 return view('admin_short_leave',array('matched_users'=>$match_users,
	 'todays'=>$today,'matched_tls'=>$tls_for_proj,'matched_leaves'=>$match_leaves));  	
 
	}
 public function admin_view_report_sh_leave()
 {	$tl_id=Auth::user()->id;
 $input=input::all();
 $status_for=$input['status'];
// $delid=$input['user_id_del'];
 //var_dump( $input);die;
//$input = Input::all();
	$tl_id=Auth::user()->id;
	//var_dump($input);die;
	$te_mem_id=$input['user_id_detail'];
	$tm_detail_leaeves=short_leave::where('applicant_id', '=', $te_mem_id )->where('status', '=', $status_for )->get();
	
	
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
	 
	 return view('admin_rep_tmem_sh_leave',array('matched_users'=>$match_users,'users_leaves'=>$tm_detail_leaeves,
	 'todays'=>$today,'status_fo'=>$status_for));  
	 //$user = Auth::user();
 
 
 }
  public function ad_sh_leave_datefilters()
 {	$tl_id=Auth::user()->id;
 $input=input::all();
//var_dump( $input);die;
  $today = Carbon::now();
 $start_date = Carbon::now();
 $end_date = Carbon::now();
$status_updated_by=Auth::user()->first_name." ".Auth::user()->last_name;
$start_date = Carbon::parse($input['start_date']);
$end_date = Carbon::parse($input['end_date']);
 $status_for=$input['status'];
$te_mem_id=$input['user_id_data'];
$tm_detail_leaeves=short_leave::where(function ($query)use ($te_mem_id, $tl_id,$status_for) {
    $query->where('applicant_id', '=', $te_mem_id )
         ->where('status', '=', $status_for );
})->where(function ($query)  use ($end_date, $start_date) {
    $query->where('end_time','>',$start_date)
        // ->where('start_date','>',$start_date)
		->whereBetween('start_time', array($start_date ,$end_date));
		  
})->get();
		
	$today = Carbon::today();
	
	
	 $match_users=user::where('id', '=', $te_mem_id)->get();
	 
	 return view('admin_rep_tmem_sh_leave',array('matched_users'=>$match_users,'users_leaves'=>$tm_detail_leaeves,
	 'todays'=>$today,'status_fo'=>$status_for,'end_inp_date'=>$end_date));  
	  
 
 }


 
}
