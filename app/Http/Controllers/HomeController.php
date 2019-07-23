<?php

namespace App\Http\Controllers;
use App\User;
use App\contact_us;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

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
		// echo $usrid;
		  //echo "from session";
	//$ustyp= Auth::user()->id;  
	//var_dump($user);
	//die;
	//die;
	 if(($usrid)==('admin'))
	 { //echo "i am admin";die;
	// $match_users=user::all();
$match_users=user::all();

	 
	 return view('adminhome',array('matched_users'=>$match_users));	 
	  
	 
	 
	 
	 }

	 if(($usrid)==('employer'))
	  { //echo "person is employer";
	  $current_emp_id=Auth::user()->id;
	 // var_dump($current_emp_id);die;
	 $emp_info= user::where('id', '=', $current_emp_id )->get();
	 //$detail_ord=order::where('status', '=', 'new' )->get();
	
	//  var_dump($emp_info);die;
	 //$clogo=$company_logo['upload_logo'];

          $all_contact_us=contact_us::where('status','=',"pending")->get();
          return view('emphome_contactus',array('all_lat_contact_us'=>$all_contact_us));
          // return view('dashboard',array('neword'=>$ord,'allord'=>$allord,'compord'=>$compord,'ordcanc'=>$ordccancc));
	  // return view('emphome111');
	 	 
	 }
     //   return view('home');
    }
}
