<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Leave Appliction-Team member</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.css" />

   
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <script>
  $(function() {
    $( "#datepicker" ).timepicker({ 'timeFormat': 'H:i:s' , 'scrollDefault': 'now' });
	 });
  $(function() {
    $( "#datepicker1" ).timepicker({ 'timeFormat': 'H:i:s' , 'scrollDefault': 'now' });
	 });
  </script>
  <script> 

$(document).ready(function(){
    $("#flipforjobs").click(function(){
		$("#flipforjobs").hide();
        $("#panelforjobs").slideToggle("slow");
    });
});
$(document).ready(function(){
    $("#flipforjobsopen").click(function(){
		$("#flipforjobs").show();
        $("#panelforjobs").slideToggle("slow");
    });
});


</script>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Points system</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

<style> 
#panel, #flip, #panelforjobs, #flipforjobs {
    padding: 5px;
    text-align: center;
   
   
}

#tmdet {
    width: 300px;
     background-color: WHITE;
	 border: 2px solid GREY;
	  padding: 15px;
    box-shadow: 10px 10px 5px #888888;
}

#panel,#panelforjobs,#inner {
    padding: 50px;
    display: none;
}

</style>
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                   {{-- <li>--}}</br>
</br>               
&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
                   &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  


    <a href="{{ url('/home') }}">{{-- Logout {{ Auth::user()->first_name }}--}}
                               <button  class="btn btn-primary">
                               <i class="fa fa-home"></i>  Home  
                                </button>{{--<span class="caret"></span>--}}
                            </a>
                            <a href="{{ url('/short_lv_mgt_vw') }}"><button  class="btn btn-primary">
                                    <i class="fa  fa-users"></i>&nbsp;&nbsp;Short Leave
                                </button></a>
                                 <a href="{{ url('/pointsys') }}"><button  class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>&nbsp;&nbsp;To point system
                                </button></a>
                     <a href="{{ url('/make_team') }}"><button  class="btn btn-primary">
                                    <i class="fa  fa-object-group"></i>&nbsp;&nbsp; Team
                                </button></a>    
                   
                   
                   <a href="{{ url('/leave_mgt_vw') }}"><button  class="btn btn-primary">
                                    <i class="fa  fa-users"></i>&nbsp;&nbsp; Leave Management
                                </button></a>
                   {{--  @if($leaves_count > 0)
                     <a href="{{ url('/leave_mgt_vw') }}"> 
                    <button type="button" class="btn btn-danger">Pending leaves <span class="badge">{{$leaves_count}}
                    </span></button>   </a> 
                    @endif --}}
                    
                    
                                             
                     <a href="{{ url('/ch_pswd_teamlead_vw') }}">{{-- Logout {{ Auth::user()->first_name }}--}}
                               <button  class="btn btn-primary">
                             <i class="fa fa-pencil-square-o"></i>      Change Password  
                                </button>{{--<span class="caret"></span>--}}
                            </a> 
                            {{-- </li> --}}
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              <a href="{{ url('/logout') }}">{{-- Logout {{ Auth::user()->first_name }}--}}
                               <h5>
                                   Logout {{ Auth::user()->first_name }}  <i class="fa fa-btn fa-sign-out"></i>
                                {{--<span class="caret"></span>--}} </h5>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

   
    <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Team leader Short Leave application section</div>
                 <div> </div>
                 <div id="topcorner" > 
                                <a href="{{ url('/all_sh_leave_app') }}"><button  class="btn btn-info">
                                    <i class="fa fa-calendar-plus-o"></i>All Short leaves
                                </button></a> 
                                
                                <a href="{{ url('/cancelled_sh_leave_app') }}"><button  class="btn btn-info">
                                    <i class="fa fa-btn fa-calendar-times-o"></i>Cancelled Short leaves
                                </button></a>  
                                 
                                <a href="{{ url('/approved_sh_leave_app') }}"><button  class="btn btn-info">
                                    <i class="fa fa-btn fa-calendar-check-o"></i>Approved Short leaves
                                </button></a> 
                                                                
                                
                                <a href="{{ url('/pending_sh_leave_app') }}"><button  class="btn btn-info">
                                    <i class="fa fa-btn fa-calendar-o"></i>Pending Short leaves
                                </button></a> </a> </div>
                <div class="panel-body">
                 <h1>Team leader Short Leave application section</h1></br></br>
          {{--  <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>co</h3>
                <p>Completed orders</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="completeOrders" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>--}}
                   
                  {{--   <br>{{ Auth::user()->first_name }} </br>
                      <br>email  {{ Auth::user()->email }} </br> --}}
                      @foreach($matched_users as $ser_user1)
        <div id="tmdet">
        <h4>Details for {{$ser_user1['name']}}	</h4>
         <h6>  
        
        <h4>  {{$ser_user1['first_name']}}
          {{$ser_user1['last_name']}}</h4><br>
          Team member ID  {{$team_member_id=$ser_user1['id']}}
         <br>Email  {{$ser_user1['email']}}
          <br>Designation  {{$ser_user1['type_of']}}
           <br>Deparatment  {{$ser_user1['dept']}}
           </div>
         @endforeach	
                       
                          
                         
            <div id="panelforjobs" >
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/tm_apply_short_leave') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('leave_type') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Leave type</label>

                            <div class="col-md-2">
<select name="leave_type" required>
  <option disabled selected > -- select an option -- </option>
  <option value="casual">Casual</option>
  <option value="sick">Sick</option>
    <option value="other">Other</option>
  </select>
@if ($errors->has('leave_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('leave_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                          <div class="form-group{{ $errors->has('tl_comment') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Your comment</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tl_comment" 
                                value="{{ old('tl_comment') }}" required>

                                @if ($errors->has('tl_comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tl_comment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('start_time') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">start_time</label>

                            <div class="col-md-6">
                           {{-- <input type="text" class="form-control" name="applicant_comment" 
                                value="{{ old('applicant_comment') }}" required> --}}
                                <input type="text"  id="datepicker" class="form-control" name="start_time" required >

                                @if ($errors->has('start_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('end_time') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">end_time</label>

                            <div class="col-md-6">
                           {{-- <input type="text" class="form-control" name="applicant_comment" 
                                value="{{ old('end_date') }}" required> --}}
                                <input type="text"  id="datepicker1" class="form-control" name="end_time" required >

                                @if ($errors->has('end_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                         <div class="form-group{{ $errors->has('team_lead_for_approval') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Team lead for approval </label>

                            <div class="col-md-2">
<select name="team_lead_for_approval" required>
  <option disabled selected > -- select Teamleader -- </option>
 @foreach($matched_tls as $teamleaders)
   <option value="{{$teamleaders->mem_team_made_by.'-'.$teamleaders->mem_team_made_by_id}}">
   {{$teamleaders->mem_team_made_by}}---- ID:{{$teamleaders->mem_team_made_by_id}}</option>
   @endforeach
  </select>
@if ($errors->has('team_lead_for_approval'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('team_lead_for_approval') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>

                       

                        
                                            <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-check"></i>Make Short leave Request
                                </button>
                            </div>
                        </div>
                    </form>
                        <div align="center">  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;     <button id="flipforjobsopen" class="btn btn-danger">
                               <i class="fa fa-times"></i>   Cancel making Request
                                </button> </div>
                    
                   
                   
                          
                         </div> </br></br></br></br>
                         <div align="center"> <button id="flipforjobs" class="btn btn-success">
                                 Add New Short Leave  &nbsp;<i class="fa fa-sort-desc"></i> 
                                </button>  </div>        
                      
                   <?php
$total_points_days=0;
$total_points_score=0;
$avg_points=0;

?>
                    
                         <!--  <button class="btn btn-primary" id="flipforjobs">
                                    <i class="fa fa-btn fa-user"></i>Add job666
                                </button>
                               -->
                                 
                                  <div class="col-md-6">
                          {{--  <form method="post" action="{{url('serc')}}" accept-charset="UTF-8">
     <!--   <input name="pass_name" type="hidden" value="{{ Session::get('name') }}"/>  -->  
            <div class="input-group">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input type="text" name="insearch" class="form-control" placeholder="Search Users by Name, id, designation or departments"/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>69
                </form>--}}
                </span>
            </div>
              </div> </br>
</br> </br></br></br> <div align="left">  {{--
<form class="form-horizontal" role="form" method="POST" action="{{ url('/admindatefilter') }}">
                        {!! csrf_field() !!}
    <input type="hidden" name="user_id_data"  value="{{$team_member_id}}">
  &nbsp;&nbsp;&nbsp;  From Date : <input type="text"  id="datepicker" name="fromdate">
 &nbsp;&nbsp;&nbsp; To Date: <input type="text" id="datepicker1" name="todate">
    <button type="submit"  class="btn-primary btn-sm"  data-title="Delete12345678"  >Search
    <span class="glyphicon glyphicon-play-circle"></span>
    </button></p></form>    --}}    
     

                            
                                    
      </div>  </br> </br>           
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>


	<div class="row">
		
        
        <div class="col-md-12">
        </h6>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped" style="font-size:13px">
                   
                    <thead>
                  <tr> 
                  
                   <th>leave application-No</th>
                    <th>Leave Type</th>
                     <th>Applicant Name </th>
                     <th>Status</th>
                     <th>Start Time</th>
                     <th>End Time</th>
                      <th>view</th>
                       <th>View all</th>
                      
                   {{--    <th>Delete</th> --}}
                       </tr>
                   </thead>
    <tbody>
    @foreach($matched_leaves as $detail_leaves)
    
    <tr>
    
    <td>{{ $detail_leaves['id']}}</td>
    <td>{{ $detail_leaves['leave_type']}}</td>
    <td>{{$detail_leaves['applicant_name']}}</td>
    <td>{{$detail_leaves['status']}}</td>
    <td>{{$detail_leaves['start_time']}}</td>
    <td>{{$detail_leaves['end_time']}}</td>
    <td><span id="{{$detail_leaves['id']}}"  > <p  title="Edit">
    <span class="glyphicon glyphicon-th-large"></span></p></span> </td>
    <td><form class="form-horizontal" role="form" method="POST" action="{{ url('/view_sh_report') }}">
                        {!! csrf_field() !!}
      <input type="hidden" name="status"  value="{{ $detail_leaves['status']}}">
    <input type="hidden" name="user_id_detail"  value="{{ $detail_leaves['applicant_id']}}">
    
    <button type="submit" formtarget="_blank" class="btn-info btn-sm"  data-title="view Report"  >
    <span class="glyphicon glyphicon-share"></span>
    </button></p></form></td>
 {{--  <td><form class="form-horizontal" role="form" method="POST" action="{{ url('/deleteproject') }}" 
    onSubmit="return confirm('are you sure you want to delete  withname {{ $detail_leaves['id']}} ?')">
                        {!! csrf_field() !!}
    <input type="hidden" name="proj_id_del"  value="{{$detail_leaves['id']}}">
    
    <button type="submit" class="btn btn-danger btn-xs" data-title="Delete12345678"  >
    <span class="glyphicon glyphicon-trash"></span>
    </button></p></form></td> --}}
    
   
     
 <script>
$(document).ready(function(){
    $("#{{$detail_leaves['id']}}").click(function(){
        $("#{{$disp=$detail_leaves['id']."abc"}}").slideToggle("slow");
    });
});
</script>
 <script>
  $(function() {
    $("#{{$disp=$detail_leaves['id']."abcef"}}").timepicker({ 'timeFormat': 'H:i:s' , 'scrollDefault': 'now' });
  });
  $(function() {
    $("#{{$disp=$detail_leaves['id']."abcefd"}}").timepicker({ 'timeFormat': 'H:i:s' , 'scrollDefault': 'now' });
  });
  </script>
  

</tr>
<tr>

   
 <td colspan="9"> 
 <div  id="{{$disp=$detail_leaves['id']."abc"}}" style="display:none" align="center" >
 <div class="panel-body">
 <form class="form-horizontal" role="form" method="POST" action="{{ url('/tl_manage_leave') }}">
                        {!! csrf_field() !!}

                        {{-- <div class="form-group{{ $errors->has('leave_type') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Leave type</label>

                            <div class="col-md-2">
<select name="leave_type" required>
  <option disabled selected > -- select an option -- </option>
  <option value="casual">Casual leave</option>
  <option value="sick">Sick leave</option>
  <option value="annual">Annual leave</option>
   <option value="other">Other</option>
  </select>
@if ($errors->has('leave_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('leave_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div> --}}
              <div class="form-group{{ $errors->has('leave_type') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Leave type</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="leave_type" 
                                value="{{$detail_leaves['leave_type']}}" disabled>

                                @if ($errors->has('leave_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('leave_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>             
                        
                          
                        <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Start Time</label>

                            <div class="col-md-6">
                           {{-- <input type="text" class="form-control" name="applicant_comment" 
                                value="{{ old('applicant_comment') }}" required> --}}
  <input type="text"  id="{{$disp=$detail_leaves['id']."abcef"}}" class="form-control" name="start_time" 
   value="{{$detail_leaves['start_time']}}" disabled >

                                @if ($errors->has('start_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">End Time</label>

                            <div class="col-md-6">
                           {{-- <input type="text" class="form-control" name="applicant_comment" 
                        value="{{ old('end_time') }}" required> --}}
  <input type="text"  id="{{$disp=$detail_leaves['id']."abcefd"}}" class="form-control" name="end_time" value="{{$detail_leaves['end_time']}}" disabled >

                                @if ($errors->has('end_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <input type="hidden" name="leave_id"  value="{{$detail_leaves['id']}}">
                        <div class="form-group{{ $errors->has('tl_comment') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="status" 
                                value="{{$detail_leaves['status']}}" disabled>

                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>   
                        <div class="form-group{{ $errors->has('applicant_comment') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Applicant's comment</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="applicant_comment" 
                                value="{{$detail_leaves['applicant_comment']}}" disabled>

                                @if ($errors->has('applicant_comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('applicant_comment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                

                       {{--  <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">update status </label>

                            <div class="col-md-2">
<select name="status" required>
 <option disabled selected > -- select status -- </option>

   <option value="cancelled">Cancel </option>
   <option value="Approved">Approve </option>
  
  </select>
@if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div> --}}
   <div class="form-group{{ $errors->has('tl_comment') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Your comment</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tl_comment" 
                                value="{{$detail_leaves['tl_comment']}}" disabled>

                                @if ($errors->has('tl_comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tl_comment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                     

                       

                        
                                            <div class="form-group">
                           {{-- <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-check"></i>Update leave Request
                                </button>
                            </div> --}}
                        </div>
                    </form>

                    </tr>
                                
                        </div>
                         
</div> 






  @endforeach
  
  
    
    </tbody>
</table>


            
        </div>
	</div>
</div>



    
    
    
    
                    
                </div>
                
            
        </div>
    </div>
</div>

</div>

    <!-- JavaScripts -->
    
   
    
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

 

 
</body>
</html>