<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Project manager homepage</title>
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

    <title>Project manager Dashboard</title>

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
                               <i class="fa fa-home"></i> Dashboard  
                                </button>{{--<span class="caret"></span>--}}
                            </a>
                 {{--   </li> 
                    <li> --}}
                    <a href="{{ url('/pointsys_apmanager') }}"><button  class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>&nbsp;&nbsp;To point system
                                </button></a>
                   {{--  <a href="{{ url('/make_team') }}"><button  class="btn btn-primary">
                                    <i class="fa  fa-object-group"></i>&nbsp;&nbsp; Make team
                                </button></a> --}}            
                     <a href="{{ url('/ch_pswd_pmanager_vw') }}">{{-- Logout {{ Auth::user()->first_name }}--}}
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
                <div class="panel-heading">Project manager Dashboard</div>
                 <div> </div>
                 <div id="topcorner" > 
                                <a href="{{ url('/allprojects') }}"><button  class="btn btn-info">
                                    <i class="fa fa-btn fa-calendar"></i>All projects
                                </button></a> 
                                
                                <a href="{{ url('/cancelled_projects') }}"><button  class="btn btn-info">
                                    <i class="fa fa-calendar-times-o"></i>&nbsp;Cancelled projects
                                </button></a>  
                                 
                                <a href="{{ url('/completed_projects') }}"><button  class="btn btn-info">
                                    <i class="fa fa-btn fa-calendar-check-o"></i>Completed projects
                                </button></a> 
                                                                
                                
                                <a href="{{ url('/active_projects') }}"><button  class="btn btn-info">
                                    <i class="fa fa-calendar-o"></i>&nbsp;&nbsp;Active projects
                                    
                                </button></a> 
                                
                               @if($pending_proj_count > 0)
                     <a href="{{ url('/overdue_projects') }}"> 
                    <button type="button" class="btn btn-danger">Over due projects <span class="badge">{{$pending_proj_count}}
                    </span></button>   </a> 
                    @else
                    <a href="{{ url('/overdue_projects') }}"><button  class="btn btn-info">
                                    <i class="fa fa-btn fa-user"></i>Over due projects
                                    
                                </button></a>
                    @endif 
                                
                                
                                 </a></div>
                <div class="panel-body">
                 <h1>Project manager Dashboard</h1></br></br>
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
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/makeproject') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('project_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Project Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="project_name" 
                                value="{{ old('project_name') }}"   required >

                                @if ($errors->has('project_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('project_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--  <div class="form-group{{ $errors->has('project_description') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Project Description</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="project_description" 
                                value="{{ old('project_description') }}" >

                                @if ($errors->has('project_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('project_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}
                        
                        <div class="form-group{{ $errors->has('task_description') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Project Description</label>

                            <div class="col-md-6">
                               {{-- <textarea rows="4" cols="50"  class="form-control" name="task_description" 
                                value="{{ old('task_description') }}"> --}}
                                 <textarea class="form-control" rows="2" maxlength="245" 
                                 name="project_description" required></textarea>
                               {{--   </textarea> --}}

                                @if ($errors->has('project_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('project_description') }}</strong>
                                    </span>
                                @endif
                              
                            </div>
                        </div> 
                        
                        
                        
                        
                        
                       <div class="form-group{{ $errors->has('assigned_to') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Project Assingned to </label>

                            <div class="col-md-2">
<select name="proj_assigned_to" required>
  <option disabled selected > -- select Teamleader -- </option>
 @foreach($matched_tls as $teamleaders)
   <option value="{{$teamleaders->first_name.'-'.$teamleaders->id}}">{{$teamleaders->first_name}}---- ID:{{$teamleaders->id}}</option>
   @endforeach
  </select>
@if ($errors->has('assigned_to'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('assigned_to') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                        <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">		Start date</label>

                            <div class="col-md-6">
                           {{-- <input type="text" class="form-control" name="applicant_comment" 
                                value="{{ old('applicant_comment') }}" required> --}}
                                <input type="text"  id="datepicker" class="form-control" name="start_date" required >

                                @if ($errors->has('start_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('expected_comp_date') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"> Expected complition date</label>

                            <div class="col-md-6">
                           {{-- <input type="text" class="form-control" name="applicant_comment" 
                                value="{{ old('end_date') }}" required> --}}
                                <input type="text"  id="datepicker1" class="form-control" name="expected_comp_date" required >

                                @if ($errors->has('expected_comp_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('expected_comp_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
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
                            <div class="col-md-6 col-md-offset-4">
                               <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-check"></i>Make Project
                                </button>
                            </div>
                        </div>
                    </form>
                        <div align="center">  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;     <button id="flipforjobsopen" class="btn btn-danger">
                               <i class="fa fa-times"></i>   Cancel making Project
                                </button> </div>
                    
                   
                   
                          
                         </div></div> </br></br></br></br>
                         <div>  <div align="center"><button id="flipforjobs" class="btn btn-success">
                                 Add New  Project &nbsp;<i class="fa fa-sort-desc"></i> 
                                </button>   </br></br></div>  
           <div style="width: 350px;">                    
     
      <form method="post" action="{{url('sercProj')}}" accept-charset="UTF-8">
     <!--   <input name="pass_name" type="hidden" value="{{ Session::get('name') }}"/>  -->  
            <div class="input-group">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input type="text" name="insearch" class="form-control" placeholder="Search Projects by Name, id or Teamlead"/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </form>
                </span>
              </div>

                      
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
              </div> 
</br>  <div align="left">  {{--
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
                  
                   <th>Project-id</th>
                    <th>Project name</th>
                     <th>Assigned to</th>
                     <th>Status</th>
                     <th>Start date</th>
                     <th>Expected compliton date</th>
                      <th>Edit</th>
                      
                       <th>Delete</th>
                       </tr>
                   </thead>
    <tbody>
    @foreach($matched_projects as $ser_proj)
    
    <tr>
    
    <td>{{ $ser_proj['id']}}</td>
    <td>{{ $ser_proj['project_name']}}</td>
    <td>{{$ser_proj['assigned_to']}}</td>
    <td>{{$ser_proj['status']}}</td>
    <td>{{$ser_proj['start_date']}}</td>
    <td>{{$ser_proj['expected_comp_date']}}</td>
    <td><span id="{{$ser_proj['id']}}"  > <p  title="Edit">
    <span class="glyphicon glyphicon-pencil"></span></p></span> </td>
    <td><form class="form-horizontal" role="form" method="POST" action="{{ url('/deleteproject') }}" 
    onSubmit="return confirm('are you sure you want to delete  withname {{ $ser_proj['project_name']}} ?')">
                        {!! csrf_field() !!}
    <input type="hidden" name="proj_id_del"  value="{{$ser_proj['id']}}">
    
    <button type="submit" class="btn btn-danger btn-xs" data-title="Delete12345678"  >
    <span class="glyphicon glyphicon-trash"></span>
    </button></p></form></td>
   
     
 <script>
$(document).ready(function(){
    $("#{{$ser_proj['id']}}").click(function(){
        $("#{{$disp=$ser_proj['id']."abc"}}").slideToggle("slow");
    });
});
</script>
<script>
  $(function() {
    $("#{{$disp=$ser_proj['id']."abcef"}}").datepicker({ dateFormat: 'yy-mm-dd' }).val();
  });
  $(function() {
    $("#{{$disp=$ser_proj['id']."abcefd"}}").datepicker({ dateFormat: 'yy-mm-dd' }).val();
  });
  </script>
</tr>
<tr>

   
 <td colspan="8"> 
 <div  id="{{$disp=$ser_proj['id']."abc"}}" style="display:none" align="center" >
 <div class="panel-body">
<form class="form-horizontal" role="form" method="POST" action="{{ url('/editproject') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('project_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Project Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="project_name" 
                                value="{{ $ser_proj['project_name']}}">

                                @if ($errors->has('project_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('project_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <div class="form-group{{ $errors->has('project_description') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Project Description</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="project_description" 
                                value="{{ $ser_proj['project_description']}}">

                                @if ($errors->has('project_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('project_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    {{--    <div class="form-group{{ $errors->has('assigned_to') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Project Assigned To</label>

                            <div class="col-md-2">
<select name="assigned_to">
  <option disabled selected > -- select Teamleader -- </option>
 @foreach($matched_tls as $teamleaders)
   <option value="{{$teamleaders->first_name}}">{{$teamleaders->first_name}}</option>
   @endforeach
  </select>
@if ($errors->has('assigned_to'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('assigned_to') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div> --}}
                        <div class="form-group{{ $errors->has('assigned_to') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Project Assingned to </label>

                            <div class="col-md-2">
<select name="proj_assigned_to" required>
  <option disabled selected > -- select Teamleader -- </option>
 @foreach($matched_tls as $teamleaders)
   <option value="{{$teamleaders->first_name.'-'.$teamleaders->id}}">{{$teamleaders->first_name}}---- ID:{{$teamleaders->id}}</option>
   @endforeach
  </select>
@if ($errors->has('assigned_to'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('assigned_to') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                        <div class="form-group{{ $errors->has('type_of') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Status</label>

                            <div class="col-md-2">
<select name="status" required>
  <option disabled selected > -- select status -- </option>
  <option value="pending">Pending</option>
  <option value="complete">Complete</option>
   <option value="cancelled">Cancelled</option>
    </select>
@if ($errors->has('type_of'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type_of') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                        <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">start Date</label>

                            <div class="col-md-6">
                               {{-- <input type="text" class="form-control" name="start_date" 
                                value="{{ $ser_proj['start_date']}}"> --}}
  <input type="text"  id="{{$disp=$ser_proj['id']."abcef"}}" class="form-control" name="start_date" 
   value="{{ $ser_proj['start_date']}}" required >                               

                                @if ($errors->has('start_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('expected_comp_date') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Expected Complition Date</label>

                            <div class="col-md-6">
                               {{-- <input type="text" class="form-control" name="expected_comp_date" 
                                value="{{ $ser_proj['expected_comp_date']}}"> --}}
                                
<input type="text"  id="{{$disp=$ser_proj['id']."abcefd"}}" class="form-control" name="expected_comp_date" value="{{$ser_proj['expected_comp_date']}}" required >
                                @if ($errors->has('expected_comp_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('expected_comp_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
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
                            <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-check"></i>Edit
                                </button> 
                            </div>
                        </div><input type="hidden" name="proj_id"  value="{{$ser_proj['id']}}">
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