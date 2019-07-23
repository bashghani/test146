<?php

namespace App\Http\Controllers;

use App\account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\contact_us;
use DB;
use App\publication;

use App\user;
use File;


use App\Http\Requests;

class empController extends Controller
{
   public function store_news()
   {
      $input = Input::all();
	 // var_dump($input);die();
	 // echo "input is valid123456</br>";die;
	   
	/*  $this->validate( $request, [
            'job_title' => 'required|max:255',
            'job_description' => 'required|max:4000',
            'job_industry' => 'required|max:255',
			
			'job_sub_area' => 'required|max:255',
			'no_of_positions' => 'required|max:255',
			'job_shift' => 'required|max:255',
			'job_location' => 'required|max:255',
			'gender_req' => 'required|max:255',
			'min_edu_req' => 'required|max:255',
			'career_level' => 'required|max:255',
			'minimum_exp_req' => 'required|max:255',
			'apply_by' => 'required|max:255',
			'salary_range' => 'required|max:255',
        ]);
		*/
		
		
		
		// $input=input::all();
	//var_dump($input);die;
	//start file section
/*	$file = array('image' => Input::file('image'));
		// var_dump($file);die;
		//  $size = Input::file('image')->getSize();
		  //echo $size;
	
	$destinationPath = '';
    $filename        = '';

    if (Input::hasFile('image')) {
        $file            = Input::file('image');
     //   $destinationPath = public_path().'/img/';
	   $destinationPath ='img/';
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);
		$impath='img/'.$filename;
		
		
		//var_dump($impath);
	
		
   }
	else{
	$impath=1;
		
		}
				$input['small_pic_link']=$impath;	*/
				$file = array('image1' => Input::file('image1'));
		// var_dump($file);die;
		//  $size = Input::file('image')->getSize();
		  //echo $size;
	
	$destinationPath = '';
    $filename        = '';

    if (Input::hasFile('image1')) {
        $file            = Input::file('image1');
   //   $destinationPath = public_path().'/img/';
	  $destinationPath ='img/';
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);
		$impath='img/'.$filename;
		
		//var_dump($impath);
	
		
   }
	else{
	$impath=1;
		
		}
		//Storage::delete('img/OZ0xe7_bigbathroombanner.png');
	//$filename='img/todel.png';
//File::delete($filename);
	//end file section
	//$input['store_banner']="test";
	$input['large_pic_link']=$impath;	
	 $nwuser=news::create($input);
	// echo "done upload";
	// die;
	$current_emp_id=Auth::user()->id;
	 // var_dump($current_emp_id);die;
	 $emp_info= user::where('id', '=', $current_emp_id )->get();
	 //$detail_ord=order::where('status', '=', 'new' )->get();
	
	//  var_dump($emp_info);die;
	 //$clogo=$company_logo['upload_logo'];
	  
	   $all_jobs_emp=news::all();
	  //  $all_cate=category::all();
	   //$all_jobs_emp= jobb::where('status', '=',  'Active' )->paginate(4);
	   //return view('emphome1');
	   return view('emphome',array('all_jobs'=>$all_jobs_emp,'forlogo'=> $emp_info)); 
	  // var_dump($input);die;
    }
	public function delete_news()
    {
      $input = Input::all();
	 // var_dump($input);die;
	  $selected_store=$input['user_id_del'];
		$store_selct=news::where('id','=',$selected_store)->first();
		//$prev_img_small=$store_selct->small_pic_link;
		$prev_img_large=$store_selct->large_pic_link;
		
		$store_selct->delete();
				//$input['store_banner']=$impath;	
				
		//Storage::delete('img/OZ0xe7_bigbathroombanner.png');
	//$filename_small=$prev_img_small;
	$filename_large=$prev_img_large;
//File::delete($filename_small);
File::delete($filename_large);
$current_emp_id=Auth::user()->id;
	 // var_dump($current_emp_id);die;
	 $emp_info= user::where('id', '=', $current_emp_id )->get();
	 //$detail_ord=order::where('status', '=', 'new' )->get();
	
	//  var_dump($emp_info);die;
	 //$clogo=$company_logo['upload_logo'];
	  
	   $all_jobs_emp=news::all();
	  //  $all_cate=category::all();
	   //$all_jobs_emp= jobb::where('status', '=',  'Active' )->paginate(4);
	   //return view('emphome1');
	   return view('emphome',array('all_jobs'=>$all_jobs_emp,'forlogo'=> $emp_info)); 
	  // var_dump($input);die;
    }
	public function edit_news()
    {
      $input = Input::all();
	   $selected_store=$input['j_id'];
	 // var_dump($input);die;
	 $store_selct=news::where('id','=',$selected_store)->first();
	 $prev_img_large=$store_selct->large_pic_link;
	 $file = array('image1' => Input::file('image1'));
		// var_dump($file);die;
		//  $size = Input::file('image')->getSize();
		  //echo $size;
	
	$destinationPath = '';
    $filename        = '';

    if (Input::hasFile('image1')) {
        $file            = Input::file('image1');
   //   $destinationPath = public_path().'/img/';
	  $destinationPath ='img/';
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);
		$impath='img/'.$filename;
		
		//var_dump($impath);
		$store_selct->large_pic_link=$impath;
		$filename_large=$prev_img_large;
		File::delete($filename_large);
	
		
   }
	 
	 
		
		$store_selct->name=$input['name'];
		$store_selct->short_description=$input['short_description'];
		$store_selct->detailed_description=$input['detailed_description'];
		$store_selct->save();
		
		//$prev_img_small=$store_selct->small_pic_link;
		//$prev_img_large=$store_selct->large_pic_link;
		
		//$store_selct->delete();
				//$input['store_banner']=$impath;	
				
		//Storage::delete('img/OZ0xe7_bigbathroombanner.png');
	//$filename_small=$prev_img_small;
	
//File::delete($filename_small);

$current_emp_id=Auth::user()->id;
	 // var_dump($current_emp_id);die;
	 $emp_info= user::where('id', '=', $current_emp_id )->get();
	 //$detail_ord=order::where('status', '=', 'new' )->get();
	
	//  var_dump($emp_info);die;
	 //$clogo=$company_logo['upload_logo'];
	  
	   $all_jobs_emp=news::all();
	  //  $all_cate=category::all();
	   //$all_jobs_emp= jobb::where('status', '=',  'Active' )->paginate(4);
	   //return view('emphome1');
	   return view('emphome',array('all_jobs'=>$all_jobs_emp,'forlogo'=> $emp_info)); 
	  // var_dump($input);die;
    }
	public function show_publications()
    {//echo "on publications";die();
	$current_emp_id=Auth::user()->id;
	 // var_dump($current_emp_id);die;
	 $emp_info= user::where('id', '=', $current_emp_id )->get();
	 //$detail_ord=order::where('status', '=', 'new' )->get();
	
	//  var_dump($emp_info);die;
	 //$clogo=$company_logo['upload_logo'];
	  
	   $all_jobs_emp=publication::all();
	  // $all_cate=category::all();
	   //$all_jobs_emp= jobb::where('status', '=',  'Active' )->paginate(4);
	   //return view('emphome1');
	   return view('emphome_publication',array('all_jobs'=>$all_jobs_emp,'forlogo'=>$emp_info)); 
		
		
		}
		public function add_publications()
   {
      $input = Input::all();
	 // var_dump($input);die();
	 // echo "input is valid123456</br>";die;
	   
	/*  $this->validate( $request, [
            'job_title' => 'required|max:255',
            'job_description' => 'required|max:4000',
            'job_industry' => 'required|max:255',
			
			'job_sub_area' => 'required|max:255',
			'no_of_positions' => 'required|max:255',
			'job_shift' => 'required|max:255',
			'job_location' => 'required|max:255',
			'gender_req' => 'required|max:255',
			'min_edu_req' => 'required|max:255',
			'career_level' => 'required|max:255',
			'minimum_exp_req' => 'required|max:255',
			'apply_by' => 'required|max:255',
			'salary_range' => 'required|max:255',
        ]);
		*/
		
		
		
		// $input=input::all();
	//var_dump($input);die;
	//start file section
/*	$file = array('image' => Input::file('image'));
		// var_dump($file);die;
		//  $size = Input::file('image')->getSize();
		  //echo $size;
	
	$destinationPath = '';
    $filename        = '';

    if (Input::hasFile('image')) {
        $file            = Input::file('image');
     //   $destinationPath = public_path().'/img/';
	   $destinationPath ='img/';
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);
		$impath='img/'.$filename;
		
		
		//var_dump($impath);
	
		
   }
	else{
	$impath=1;
		
		}
				$input['small_pic_link']=$impath;	*/
				$file = array('image1' => Input::file('image1'));
		// var_dump($file);die;
		//  $size = Input::file('image')->getSize();
		  //echo $size;
	
	$destinationPath = '';
    $filename        = '';

    if (Input::hasFile('image1')) {
        $file            = Input::file('image1');
   //   $destinationPath = public_path().'/img/';
	  $destinationPath ='img/';
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);
		$impath='img/'.$filename;
		
		//var_dump($impath);
	
		
   }
	else{
	$impath=1;
		
		}
		//Storage::delete('img/OZ0xe7_bigbathroombanner.png');
	//$filename='img/todel.png';
//File::delete($filename);
	//end file section
	//$input['store_banner']="test";
	$max_id =publication::find(DB::table('publications')->max('id'));
	$max_idto= $max_id->id+1;
	$input['sequence']=$max_idto;
	
	$input['large_pic_link']=$impath;	
	 $nwuser=publication::create($input);
	// echo "done upload";
	// die;
	$current_emp_id=Auth::user()->id;
	 // var_dump($current_emp_id);die;
	 
	 $emp_info= user::where('id', '=', $current_emp_id )->get();
	 //$detail_ord=order::where('status', '=', 'new' )->get();
	
	//  var_dump($emp_info);die;
	 //$clogo=$company_logo['upload_logo'];
	
	  
	   $all_jobs_emp=publication::all();
	  //  $all_cate=category::all();
	   //$all_jobs_emp= jobb::where('status', '=',  'Active' )->paginate(4);
	   //return view('emphome1');
	   return view('emphome_publication',array('all_jobs'=>$all_jobs_emp,'forlogo'=> $emp_info)); 
	  // var_dump($input);die;
    }
	public function delete_publications()
    {
      $input = Input::all();
	 // var_dump($input);die;
	  $selected_store=$input['user_id_del'];
		$store_selct=publication::where('id','=',$selected_store)->first();
		//$prev_img_small=$store_selct->small_pic_link;
		$prev_img_large=$store_selct->large_pic_link;
		
		$store_selct->delete();
				//$input['store_banner']=$impath;	
				
		//Storage::delete('img/OZ0xe7_bigbathroombanner.png');
	//$filename_small=$prev_img_small;
	$filename_large=$prev_img_large;
//File::delete($filename_small);
File::delete($filename_large);
$current_emp_id=Auth::user()->id;
	 // var_dump($current_emp_id);die;
	 $emp_info= user::where('id', '=', $current_emp_id )->get();
	 //$detail_ord=order::where('status', '=', 'new' )->get();
	
	//  var_dump($emp_info);die;
	 //$clogo=$company_logo['upload_logo'];
	  
	   $all_jobs_emp=publication::all();
	  //  $all_cate=category::all();
	   //$all_jobs_emp= jobb::where('status', '=',  'Active' )->paginate(4);
	   //return view('emphome1');
	   return view('emphome_publication',array('all_jobs'=>$all_jobs_emp,'forlogo'=> $emp_info)); 
	  // var_dump($input);die;
    }
	public function edit_contact()
    {
      $input = Input::all();
	   $selected_store=$input['j_id'];
	   echo "thi is it";
	//var_dump($input);die;
	 $store_selct=contact_us::where('id','=',$selected_store)->first();

		// var_dump($file);die;
		//  $size = Input::file('image')->getSize();
		  //echo $size;
	



	 
	 
		
		$store_selct->status=$input['status'];
		$store_selct->completion_comment=$input['completion_comment'];
		$store_selct->save();
		
		//$prev_img_small=$store_selct->small_pic_link;
		//$prev_img_large=$store_selct->large_pic_link;
		
		//$store_selct->delete();
				//$input['store_banner']=$impath;	
				
		//Storage::delete('img/OZ0xe7_bigbathroombanner.png');
	//$filename_small=$prev_img_small;
	
//File::delete($filename_small);

$current_emp_id=Auth::user()->id;
	 // var_dump($current_emp_id);die;
	 $emp_info= user::where('id', '=', $current_emp_id )->get();
	 //$detail_ord=order::where('status', '=', 'new' )->get();
	
	//  var_dump($emp_info);die;
	 //$clogo=$company_logo['upload_logo'];

        $all_contact_us=contact_us::where('status','=',"pending")->get();
        return view('emphome_contactus',array('all_lat_contact_us'=>$all_contact_us));
	  // var_dump($input);die;
    }
	public function contact_us_home()
   {//$input=input::all();
   //$contactus=contact_us::create($input);
   
  // return view('contact'); 
   
   //var_dump($input);die();
   
	   
	   
	   
	   // echo "on publi";
   //die();
	  $all_contact_us=contact_us::where('status','=',"pending")->get();
	   return view('emphome_contactus',array('all_lat_contact_us'=>$all_contact_us)); 
	   //return view('front');
	   
	   
	   
	   
	   }
	  public function delete_contact_message()
   {$input=input::all();
  // var_dump($input);die();
   //$contactus=contact_us::create($input);
   
  // return view('contact'); 
  $del_entry=contact_us::find($input['user_id_del']);
  $del_entry->delete();
  
  //$usr =User::find($input['usr_id']); 
   //var_dump($input);die();
   
   //$all_contact_us=contact_us::where('status','=',$input['status_msg']);

       $all_contact_us=contact_us::where('status','=',$input['status_msg'])->get();
       return view('emphome_contactus',array('all_lat_contact_us'=>$all_contact_us));
	   //return view('front');
	   
	   
	   
	   
	   } 
	 public function contact_us_completed()
   {//$input=input::all();
   //$contactus=contact_us::create($input);
   
  // return view('contact'); 
   
   //var_dump($input);die();
   
	   
	   
	   
	   // echo "on publi";
   //die();
	  $all_contact_us=contact_us::where('status','=',"completed")->get();
	   return view('emphome_contactus',array('all_lat_contact_us'=>$all_contact_us)); 
	   //return view('front');
	   
	   
	   
	   
	   } 
	 public function cancelled_messages()
   {//$input=input::all();
   //$contactus=contact_us::create($input);
   
  // return view('contact'); 
   
   //var_dump($input);die();
   
	   
	   
	   
	   // echo "on publi";
   //die();
	  $all_contact_us=contact_us::where('status','=',"cancelled")->get();
	   return view('emphome_contactus',array('all_lat_contact_us'=>$all_contact_us)); 
	   //return view('front');
	   
	   
	   
	   
	   }
    public function accounts_home()
    {//$input=input::all();
        //$contactus=contact_us::create($input);

        // return view('contact');

        //var_dump($input);die();




        // echo "on publi";
        //die();
        $all_contact_us=account::where('status','=',"pending")->get();
        return view('emphome_accounts',array('all_lat_contact_us'=>$all_contact_us));
        //return view('front');




    }
    public function accounts_completed()
    {//$input=input::all();
        //$contactus=contact_us::create($input);

        // return view('contact');

        //var_dump($input);die();



        //echo "on completed";die();
        // echo "on publi";
        //die();
        $all_contact_us=account::where('status','=',"completed")->get();
        return view('emphome_accounts',array('all_lat_contact_us'=>$all_contact_us));
        //return view('front');




    }
    public function accounts_cancelled()
    {//$input=input::all();
        //$contactus=contact_us::create($input);

        // return view('contact');

        //var_dump($input);die();




       // echo "on cancelled";
        //die();
        $all_contact_us=account::where('status','=',"cancelled")->get();
        return view('emphome_accounts',array('all_lat_contact_us'=>$all_contact_us));
        //return view('front');




    }
    public function delete_account_application()
    {$input=input::all();
         //var_dump($input);die();
        //$contactus=contact_us::create($input);

        // return view('contact');
        $del_entry=account::find($input['user_id_del']);
        $del_entry->delete();

        //$usr =User::find($input['usr_id']);
        //var_dump($input);die();

        //$all_contact_us=contact_us::where('status','=',$input['status_msg']);

        $all_contact_us=account::where('status','=',$input['status_msg'])->get();
        return view('emphome_accounts',array('all_lat_contact_us'=>$all_contact_us));
        //return view('front');




    }

    public function edit_accounts_application()
    {
        $input = Input::all();
        $selected_store=$input['j_id'];
        echo "thi is it";
       // var_dump($input);die;
        $store_selct=account::where('id','=',$selected_store)->first();

        // var_dump($file);die;
        //  $size = Input::file('image')->getSize();
        //echo $size;







        $store_selct->status=$input['status'];
        $store_selct->completion_comment=$input['completion_comment'];
        $store_selct->save();

        //$prev_img_small=$store_selct->small_pic_link;
        //$prev_img_large=$store_selct->large_pic_link;

        //$store_selct->delete();
        //$input['store_banner']=$impath;

        //Storage::delete('img/OZ0xe7_bigbathroombanner.png');
        //$filename_small=$prev_img_small;

//File::delete($filename_small);

        $current_emp_id=Auth::user()->id;
        // var_dump($current_emp_id);die;
        $emp_info= user::where('id', '=', $current_emp_id )->get();
        //$detail_ord=order::where('status', '=', 'new' )->get();

        //  var_dump($emp_info);die;
        //$clogo=$company_logo['upload_logo'];

        $all_contact_us=account::where('status','=',"pending")->get();
        return view('emphome_accounts',array('all_lat_contact_us'=>$all_contact_us));
        // var_dump($input);die;
    }
}
