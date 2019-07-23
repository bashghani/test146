<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Leave Appliction-Team member</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
  });
  $(function() {
    $( "#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
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

    <title>Team member To do</title>

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
                               <i class="fa fa-home"></i> Home
                                </button>{{--<span class="caret"></span>--}}
                            </a>

      <a href="{{ url('/pointsys') }}"><button  class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>point system
                                </button></a>
                     <a href="{{ url('/make_team') }}"><button  class="btn btn-primary">
                                    <i class="fa  fa-object-group"></i>&nbsp;&nbsp; Team
                                </button></a>    
                   <a href="{{ url('/apply_leave_application_tl_vw') }}"> {{--Logout {{ Auth::user()->first_name }} --}}
                               <button  class="btn btn-primary"> 
                             <i class="fa fa-pencil-square-o"></i>      Apply Leave   
                                </button> {{--<span class="caret"></span> --}} 
                            </a></a>
                        <a href="{{ url('apply_short_leave_tl_vw') }}">{{-- Logout {{ Auth::user()->first_name }}--}}
                               <button  class="btn btn-primary">
                             <i class="fa fa-pencil-square-o"></i>     Apply Short leave
                                </button>{{--<span class="caret"></span>--}}
                            </a> 
                   
                  {{-- <a href="{{ url('/leave_mgt_vw') }}"><button  class="btn btn-primary">
                                    <i class="fa  fa-users"></i>&nbsp;&nbsp; Leave Management
                                </button></a> 
                                --}}
                     
                    <a href="{{ url('/leave_mgt_vw') }}"><button  class="btn btn-primary">
                                    <i class="fa  fa-users"></i>&nbsp;&nbsp; Manage Leave
                                </button></a>
                    
                    
                    
                                             
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
                <div class="panel-heading">To-dos for {{$task_name}}</div>
                 <div> </div>
                 <div id="topcorner" > 
      {{--   <form class="form-horizontal" role="form" method="POST" action="{{ url('/all_todo_tm') }}"  style="display:inline;">
                        {!! csrf_field() !!}
                         <input type="hidden" name="to_task_id"  value="{{$task_id_detail}}">
                        <input type="hidden" name="to_task_name"  value="{{$task_name}}">
                        <input type="hidden" name="to_proj_name"  value="{{$task_project_name}}">
                        <input type="hidden" name="to_tl_id"  value="{{$task_tl_id}}">
                        <input type="hidden" name="to_tl_name"  value="{{$task_tl_name}}">
                                <button type="submit"  class="btn btn-info">
                                    <i class="fa fa-btn fa-user"></i>All To-dos
                                </button></form> 
                                
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/cancelled_todo_tm') }}"  style="display:inline;">
                        {!! csrf_field() !!}
                         <input type="hidden" name="to_task_id"  value="{{$task_id_detail}}">
                        <input type="hidden" name="to_task_name"  value="{{$task_name}}">
                        <input type="hidden" name="to_proj_name"  value="{{$task_project_name}}">
                        <input type="hidden" name="to_tl_id"  value="{{$task_tl_id}}">
                        <input type="hidden" name="to_tl_name"  value="{{$task_tl_name}}">
                                <button type="submit"  class="btn btn-info">
                                    <i class="fa fa-btn fa-user"></i>Cancelled To-dos
                                </button></form> 
                                 
                                 <form class="form-horizontal" role="form" method="POST" action="{{ url('/completed_todo_tm') }}"  style="display:inline;">
                        {!! csrf_field() !!}
                         <input type="hidden" name="to_task_id"  value="{{$task_id_detail}}">
                        <input type="hidden" name="to_task_name"  value="{{$task_name}}">
                        <input type="hidden" name="to_proj_name"  value="{{$task_project_name}}">
                        <input type="hidden" name="to_tl_id"  value="{{$task_tl_id}}">
                        <input type="hidden" name="to_tl_name"  value="{{$task_tl_name}}">
                                <button type="submit"  class="btn btn-info">
                                    <i class="fa fa-btn fa-user"></i>Completed To-dos
                                </button></form>  
                                                                
                                
                                 <form class="form-horizontal" role="form" method="POST" action="{{ url('/active_todo_tm') }}"  style="display:inline;">
                        {!! csrf_field() !!}
                         <input type="hidden" name="to_task_id"  value="{{$task_id_detail}}">
                        <input type="hidden" name="to_task_name"  value="{{$task_name}}">
                        <input type="hidden" name="to_proj_name"  value="{{$task_project_name}}">
                        <input type="hidden" name="to_tl_id"  value="{{$task_tl_id}}">
                        <input type="hidden" name="to_tl_name"  value="{{$task_tl_name}}">
                                <button type="submit"  class="btn btn-info">
                                    <i class="fa fa-btn fa-user"></i>Active To-dos
                                </button></form> --}}
                                
                            {{--    @if($pending_task_count > 0)
                     <a href="{{ url('/overdue_tasks') }}"> 
                    <button type="button" class="btn btn-danger">Over due tasks <span class="badge">{{$pending_task_count}}
                    </span></button>   </a> 
                    @else
                    <a href="{{ url('/overdue_tasks') }}"><button  class="btn btn-info">
                                    <i class="fa fa-btn fa-user"></i>Over due tasks
                                    
                                </button></a>
                    @endif
                                
                                
                                 </a> --}} </div>
                <div class="panel-body">
                 <h1>To-dos for {{$task_name}} </h1></br></br>
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
                  {{--    @foreach($matched_users as $ser_user1)
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
         @endforeach	--}}
                       
                          
                         
            <div id="panelforjobs" >
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/make_todo_tm') }}">
                        {!! csrf_field() !!}
 
                        <div class="form-group{{ $errors->has('to_do_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">To-do Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="to_do_name" 
                                value="{{ old('to_do_name') }}"  required>

                                @if ($errors->has('to_do_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('to_do_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--  <div class="form-group{{ $errors->has('task_assigned_to') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Task assigned to</label>

                            <div class="col-md-2">
<select name="task_assigned_to" required>
  <option disabled selected > -- select team member -- </option>
 @foreach($matched_team_members as $team_member)
   <option value="{{$team_member->member_name.'-'.$team_member->member_id}}">
   {{$team_member->member_name}}---- ID:{{$team_member->member_id}}</option>
   @endforeach
  </select>
@if ($errors->has('task_assigned_to'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('task_assigned_to') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>--}}
                      {{--  <div class="form-group{{ $errors->has('task_description') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Task description</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="task_description" 
                                value="{{ old('task_description') }}" required>

                                @if ($errors->has('task_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('task_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}
                         <div class="form-group{{ $errors->has('to_do_description') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">To-do Description</label>

                            <div class="col-md-6">
                               {{-- <textarea rows="4" cols="50"  class="form-control" name="task_description" 
                                value="{{ old('task_description') }}"> --}}
                                 <textarea class="form-control" rows="2" maxlength="245" name="to_do_description"  value="{{ old('to_do_description') }}" required></textarea>
                               {{--   </textarea> --}}

                                @if ($errors->has('to_do_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('to_do_description') }}</strong>
                                    </span>
                                @endif
                              
                            </div>
                        </div> 
                        
                        
                        
                        
                        
                        
                       <div class="form-group{{ $errors->has('weightage') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Weightage</label>

                            <div class="col-md-2">
<select name="weightage" required>
 <option disabled selected > -- pending -- </option>
  <option value="0">"0"</option>
  <option value="1">"1"</option>
  <option value="2">"2"</option>
  <option value="3">"3"</option>
  <option value="4">"4"</option>
  </select>
@if ($errors->has('weightage'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('weightage') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div> <input type="hidden" name="to_task_id"  value="{{$task_id_detail}}">
                        <input type="hidden" name="to_task_name"  value="{{$task_name}}">
                        <input type="hidden" name="to_proj_name"  value="{{$task_project_name}}">
                        <input type="hidden" name="to_tl_id"  value="{{$task_tl_id}}">
                        <input type="hidden" name="to_tl_name"  value="{{$task_tl_name}}">
                       {{-- <div class="form-group{{ $errors->has('assigned_on_date') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">		Assigned on date</label>

                            <div class="col-md-6">
                          
                                <input type="text"  id="datepicker" class="form-control" name="assigned_on_date" required >

                                @if ($errors->has('assigned_on_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('assigned_on_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}
                     {{--    <div class="form-group{{ $errors->has('task_expected_comp_date') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Task Expected complition date</label>

                            <div class="col-md-6">
                           
                                <input type="text"  id="datepicker1" class="form-control" name="task_expected_comp_date" required >

                                @if ($errors->has('task_expected_comp_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('task_expected_comp_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}
                        
                      <!-- <div class="form-group{{ $errors->has('type_of') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">type of user</label>

                            <div class="col-md-2">
<select name="type_of">
  <option disabled selected > -- select an option -- </option>
  <option value="proj_manager">Project manager</option>
  <option value="team_lead">Team leader</option>
  <option value="team_member">Team member</option>
  </select>
@if ($errors->has('type_of'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type_of') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div> for assigned to -->

                       
                        
                      <!--  <div class="form-group{{ $errors->has('dept') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Department</label>

                            <div class="col-md-2">
<select name="dept">
  <option disabled selected > -- select an option -- </option>
  <option value="web_designer">Web Designer</option>
  <option value="web_developer">Web Developer</option>
  <option value="app_developer">App Developer</option>
   <option value="all">All</option>
  </select>
@if ($errors->has('dept'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dept') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div> -->



                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-check"></i>Make To-do
                                </button></form>
                        <div align="center">  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;     <button id="flipforjobsopen" class="btn btn-danger">
                               <i class="fa fa-times"></i>   Cancel making To-do
                                </button> </div>
                    
                   
                   
                          
                         </div></div> </div></br></br></br></br>
                         <div align="center"> <button id="flipforjobs" class="btn btn-success">
                                 Make new To-do &nbsp;<i class="fa fa-sort-desc"></i> 
                                </button>  </div>        
                      
                   <?php
$total_tod_count=0;
$total_weightabe_count=0;
$comp_percent=0;

?>
          @foreach($matched_todos as $cont_todo)
         <?php
		 $total_tod_count=$total_tod_count+1;
         $total_weightabe_count= $total_weightabe_count+$cont_todo['weightage'];
		 
        
         ?>
          @endforeach   
           @foreach($comlete_todos as $ser_comp_todo) 
       <?php    $comp_percent=$comp_percent+ round($ser_comp_todo['weightage']/$total_weightabe_count*100, 2)."%";
	   ?>
           
            @endforeach  
           
              <br> 
                <br>    {{--total is &nbsp; {{$comp_percent}} --}}  
               <div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:{{$comp_percent}}">
  
   {{$comp_percent}}&nbsp;&nbsp; Complete 
   <?php
   $remaining=100-$comp_percent;
    ?>
  </div>
  <div class="progress-bar progress-bar-danger" role="progressbar" style="width:{{$remaining}}%">
   {{$remaining}}% &nbsp;&nbsp; Remaining
  </div>
</div>
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
 <div align="left">  {{--
<form class="form-horizontal" role="form" method="POST" action="{{ url('/admindatefilter') }}">
                        {!! csrf_field() !!}
    <input type="hidden" name="user_id_data"  value="{{$team_member_id}}">
  &nbsp;&nbsp;&nbsp;  From Date : <input type="text"  id="datepicker" name="fromdate">
 &nbsp;&nbsp;&nbsp; To Date: <input type="text" id="datepicker1" name="todate">
    <button type="submit"  class="btn-primary btn-sm"  data-title="Delete12345678"  >Search
    <span class="glyphicon glyphicon-play-circle"></span>
    </button></p></form>    --}}    
     

                            
                                    
      </div>            
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>


	<div class="row">
		
        
        <div class="col-md-12">
        </h6>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped" style="font-size:13px">
                   
                    <thead>
                  <tr> 
                   <th>id</th>
                   <th>To-do Name</th>
                    <th>To-do Description</th>
                     <th>Weightage</th>
                      <th>Percentage</th>
                      <th>Task Name</th>
                     <th>Project Name</th>
                     <th>Teamlead Name</th>
                      <th>Status</th>
                      <th>Update status</th>
                      
                     {{--  <th>Delete</th> --}}
                       </tr>
                   </thead>
    <tbody>
    @foreach($matched_todos as $ser_todo)
    
    <tr>
    
    <td>{{ $ser_todo['id']}}</td>
    <td style="width: 130px;">{{ $ser_todo['to_do_name']}}</td>
    <td style="width: 130px;">{{$ser_todo['to_do_description']}}</td>
    <td>{{$ser_todo['weightage']}}</td>
    <td><?php 
	 echo round($ser_todo['weightage']/$total_weightabe_count*100, 2)."%";//$ser_todo['weightage']/$total_weightabe_count*100;
//$total_tod_count/$total_weightabe_count*2;
//echo $fraveg=$total_tod_count/$total_weightabe_count*$ser_todo['weightage'];

?></td>
    <td style="width: 130px;">{{$ser_todo['to_task_name']}}</td>
    <td>{{$ser_todo['to_proj_name']}}</td>
    <td>{{$ser_todo['to_tl_name']}}</td>
     <td>{{ $ser_todo['status']}}</td>
    <td><span id="{{$ser_todo['id']}}"  > <p  title="Edit">
    <span class="glyphicon glyphicon-pencil"></span></p></span> </td>
   {{-- <td><form class="form-horizontal" role="form" method="POST" action="{{ url('/deleteproject') }}" 
    onSubmit="return confirm('are you sure you want to delete  withname {{ $ser_proj['project_name']}} ?')">
                        {!! csrf_field() !!}
    <input type="hidden" name="proj_id_del"  value="{{$ser_proj['id']}}">
    
    <button type="submit" class="btn btn-danger btn-xs" data-title="Delete12345678"  >
    <span class="glyphicon glyphicon-trash"></span>
    </button></p></form></td>--}}
   
     
 <script>
$(document).ready(function(){
    $("#{{$ser_todo['id']}}").click(function(){
        $("#{{$disp=$ser_todo['id']."abc"}}").slideToggle("slow");
    });
});
</script>
</tr>
<tr>

   
 <td colspan="10"> 
 <div  id="{{$disp=$ser_todo['id']."abc"}}" style="display:none" align="center" >
 <div class="panel-body">
 <form class="form-horizontal" role="form" method="POST" action="{{ url('/edit_todo_status') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('to_do_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">to_do_name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="to_do_name" 
                                value="{{ $ser_todo['to_do_name']}}" disabled>
                                <input name="task_name" type="hidden" value="{{ $ser_todo['to_do_name']}}"/>
                                <input name="pass_todo_id" type="hidden" value="{{ $ser_todo['id']}}"/>
                                
                                <input type="hidden" name="to_task_id"  value="{{$task_id_detail}}">
                        <input type="hidden" name="to_task_name"  value="{{$task_name}}">
                        <input type="hidden" name="to_proj_name"  value="{{$task_project_name}}">
                        <input type="hidden" name="to_tl_id"  value="{{$task_tl_id}}">
                        <input type="hidden" name="to_tl_name"  value="{{$task_tl_name}}">

                                @if ($errors->has('to_do_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('to_do_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('to_do_description') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">To-do Description</label>

                            <div class="col-md-6">
                               {{-- <textarea rows="4" cols="50"  class="form-control" name="task_description" 
                                value="{{ old('task_description') }}"> --}}
                                 <textarea class="form-control" rows="2" maxlength="245" name="to_do_description"  disabled>{{ $ser_todo['to_do_description']}}</textarea>
                               

                                @if ($errors->has('to_do_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('to_do_description') }}</strong>
                                    </span>
                                @endif
                              
                            </div>
                        </div> 
                        <div class="form-group{{ $errors->has('weightage') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">weightage</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="weightage" 
                                value="{{$ser_todo['weightage']}}" disabled>
                              <input name="weightage" type="hidden" value="{{ $ser_todo['weightage']}}"/>
                              

                                @if ($errors->has('weightage'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('weightage') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          
                      {{--  <div class="form-group{{ $errors->has('task_description') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Task description</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="task_description" 
                                value="{{$ser_todo['task_description']}}" disabled>
                               <input name="task_description" type="hidden" value="{{ $ser_todo['task_description']}}"/>


                                @if ($errors->has('task_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('task_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('task_project_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Task project name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="task_project_name" 
                                value="{{$ser_todo['task_project_name']}}" disabled>
                                 <input name="task_project_name" type="hidden" 
                                 value="{{ $ser_todo['task_project_name']}}"/>

                                @if ($errors->has('task_project_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('task_project_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}
                        @if($ser_todo['status']=="pending")
                        <div class="form-group{{ $errors->has('tm_comment') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Add To-do completion comment</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tm_comment" 
                                value="{{$ser_todo['tm_comment']}}" required>

                                @if ($errors->has('tm_comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tm_comment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('type_of') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
<select name="status">
  <option selected value="{{$ser_todo['status']}}" >{{$ser_todo['status']}}</option>
  <option value="pending">Pending</option>
  <option value="complete">Complete</option>
   <option value="cancelled">Cancelled</option>
    </select>
@if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                        @elseif($ser_todo['status']=="complete")
                         <div class="form-group{{ $errors->has('tm_comment') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Your completion comment</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tm_comment" 
                                value="{{$ser_todo['tm_comment']}}" disabled>

                                @if ($errors->has('tm_comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tm_comment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tm_comment') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="status" 
                                value="{{$ser_todo['status']}}" disabled>

                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        @endif
                         
                     {{--   <div class="form-group{{ $errors->has('created_at') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Assigned On date</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="created_at" 
                                value="{{$ser_todo['created_at']}}" disabled>
                                

                                @if ($errors->has('created_at'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('created_at') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}
                      {{--  <div class="form-group{{ $errors->has('task_expected_comp_date') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Task expected compliton date</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="task_expected_comp_date" 
                                value="{{ser_proj['task_expected_comp_date']}}" disabled>
                                 <input name="task_expected_comp_date" type="hidden" 
                                 value="{{ $ser_proj['task_expected_comp_date']}}"/>

                                @if ($errors->has('task_expected_comp_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('task_expected_comp_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}
                      <!-- <div class="form-group{{ $errors->has('type_of') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">type of user</label>

                            <div class="col-md-2">
<select name="type_of">
  <option disabled selected > -- select an option -- </option>
  <option value="proj_manager">Project manager</option>
  <option value="team_lead">Team leader</option>
  <option value="team_member">Team member</option>
  </select>
@if ($errors->has('type_of'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type_of') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div> for assigned to -->

                       
                        
                      <!--  <div class="form-group{{ $errors->has('dept') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Department</label>

                            <div class="col-md-2">
<select name="dept">
  <option disabled selected > -- select an option -- </option>
  <option value="web_designer">Web Designer</option>
  <option value="web_developer">Web Developer</option>
  <option value="app_developer">App Developer</option>
   <option value="all">All</option>
  </select>
@if ($errors->has('dept'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dept') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div> -->

                             @if($ser_todo['status']=="pending")

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Update To-do Status
                                </button>
                            </div>
                        </div>
                        @endif
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