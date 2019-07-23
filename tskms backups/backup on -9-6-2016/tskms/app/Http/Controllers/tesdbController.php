<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\task;
use App\project;
use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Http\Request;
class tesdbController extends Controller

{
    public function serdb()
    {   $Y2K = Carbon::create(2019, 1, 1, 0, 0, 0);
	$nowInLondonTz = Carbon::now('+1');
	 echo "now in london <br>". $nowInLondonTz;
	echo $Y2K."<br>value is above and down" ;
	$x="2015-01-01 23:59:59";
	if( $Y2K>$x){echo "y is greater";}
	
		 $tls_for_proj=user::where('created_at', '>', "$x" )->get();
		 foreach ($tls_for_proj as $list) {
        echo "<br><br>". $list->first_name . ' ' . $list->last_name . '' . $list->email . '
'; echo "<br><br>from y2k <br><br>";
    }
		
		
		}
    
}
