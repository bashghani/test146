<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\employer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class adminController extends Controller
{
     public function store(Request $request)
    {
      $input = Input::all();
	  
	  
	   
	  $this->validate( $request, [
            'name' => 'required|max:255',
			 //'last_name' => 'required|max:255',
			 'type_of' => 'required|max:255',
             'password' => 'required|min:6|confirmed',
			//'dept' => 'required|max:255',
        ]);
	  // echo "input is valid123456</br>";
	 //  $today = Carbon::today();
	 //  echo $today;die;
	   //$input['password']=bcrypt($input['password']);
	   //$user = Auth::user();
	  // $input['emp_id']=$user['id'];
	  $input['password'] = bcrypt($input['password']);
	  $input['type_of']="employer"; 
	   $nwuser=user::create($input);
	  // var_dump($nwuser);die;
	   $input['user_id']= $nwuser->id;
	  //die;
	  //  $nwuser=employer::create($input);
	 /*  $type= $nwuser->type_of;
	   $returned_id= $nwuser->id;
	   
	   if($type=="team_member"){
		  	   $input['usr_id']=$returned_id;
		   $input['flag_status']=0;
		  // $input['flag_start_time']=0;
		  // $input['flag_end_time']=0;
		   
		   
		  $updat_flag =flag_task::create($input);
		   
		   
		   }*/
	  			
		$match_users=user::all();
	 
	 return view('adminhome',array('matched_users'=>$match_users));  
	 
	  // var_dump($input);die;
    }
	
public function editUser(Request $request)
    {
      $input = Input::all();
	 // var_dump($input);die;
	   
	  $this->validate( $request, [
           'name' => 'required|max:255',
			'type_of' => 'required|max:255',
          //  'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
			
        ]);
	  // echo "input is valid54444</br>";
	   //$input['password']=bcrypt($input['password']);
	   $user = Auth::user();
	   
	    //var_dump($input);die;
		
		$usr =User::find($input['usr_id']);
		
		
		 $usr->name = $input['name'];
		// $usr->last_name = $input['last_name'];
		 $usr->type_of = $input['type_of'];
	//	$usr->email = $input['email'];
		// $usr->password = $input['password'];
		// $usr->dept = $input['dept'];
		  $usr->password = bcrypt($input['password']);
		 
		 
		//$jobb = $input;
		//$edit_jobs=$input;
		 $usr->save();
		 $match_users=user::all();
	 
	 return view('adminhome',array('matched_users'=>$match_users));  
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
{
	$input = Input::all();
//$user = Auth::user();
$proj =user::find($input['user_id_del']);
		$proj->delete();
		 $match_users=user::all();
	 
	 return view('adminhome',array('matched_users'=>$match_users));  
			   


}
}
