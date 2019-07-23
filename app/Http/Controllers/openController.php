<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\news;
use App\contact_us;
use App\account;
use App\publication;
use App\user;
use File;
use Session;

use App\Http\Requests;

class openController extends Controller
{
  public function showmain_page()
   {
	   $all_news=news::all();
	   
	   $featured_publications=publication::where('show_featured','=','yes')->get();
	    return view('front',array('all_lat_news'=>$all_news,'feature_publications'=>$featured_publications)); 
	   //return view('front');
	   
	   
	   
	   
	   }
	  public function show_detailed_news($newsid)
   {
	   //echo $newsid;
	   //die();
	  $specific_news=news::where('id','=',$newsid)->first();
	 // return view('news_detail');
	    return view('news_detail',array('specific_latest_news'=>$specific_news)); 
	   //return view('front');
	   
	   
	   
	   
	   }
	    public function showmain_publications()
   {// echo "on publi";
   //die();
	   $all_publications=publication::all();
	    return view('publications',array('all_lat_publication'=>$all_publications)); 
	   //return view('front');
	   
	   
	   
	   
	   }
	    public function contact_admin()
   {$input=input::all();

       //var_dump($input);die();
   $contactus=contact_us::create($input);
   
   return view('contact'); 
   
   //
   
	   
	   
	   
	   // echo "on publi";
   //die();
	 //  $all_contact_us=contact_us::all();
	  //  return view('emphome_contactus',array('all_lat_contact_us'=>$all_contact_us)); 
	   //return view('front');
	   
	   
	   
	   
	   }
    public function account_application()
    {$input=input::all();

       // var_dump($input);die();
        $account=account::create($input);

        Session::flash('message', 'We have recieved your Account Application we will contact you as soon as possible through phone or email thankyou!'); 
        Session::flash('alert-class', 'alert-success'); 
    // echo "inserted account";die();
        return view('accounts');

        //




        // echo "on publi";
        //die();
        //  $all_contact_us=contact_us::all();
        //  return view('emphome_contactus',array('all_lat_contact_us'=>$all_contact_us));
        //return view('front');




    }
}
