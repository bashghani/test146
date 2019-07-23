@extends('layouts.apptl')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard For teamleader</div>{{--<a href="{{ url('/totlsdash') }}"><button  class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>To maindashboard
                                </button></a>&nbsp;--}}
                 <div> </div>
                <div class="panel-body">
             
                   
                    {{-- <br>{{ Auth::user()->first_name }} </br>
                      <br>email  {{ Auth::user()->email }} </br> --}} 
                       
                          
                         
                      <h1>Team leader points dashboard</h1>
                      
                   
                {{--    <div id="panelforjobs" >
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/makeusr') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">first_name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">last_name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('type_of') ? ' has-error' : '' }}">
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
                            
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('dept') ? ' has-error' : '' }}">
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
                            
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Make User
                                </button>
                            </div>
                        </div>
                    </form>
                       <div id="flipforjobsopen" > Cancel adding new Users sss          </div>
                    
                   
                   
                          
                         </div>
                         
                         <!--  <button class="btn btn-primary" id="flipforjobs">
                                    <i class="fa fa-btn fa-user"></i>Add job666
                                </button>
                               -->
                                 <div id="flipforjobs"> CLICK TO ADD USER </div>  --}}
                                  <div class="col-md-6">
                         {{--   <form method="post" action="{{url('serc')}}" accept-charset="UTF-8">
     <!--   <input name="pass_name" type="hidden" value="{{ Session::get('name') }}"/>  -->  
            <div class="input-group">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input type="text" name="insearch" class="form-control" placeholder="Search Users by Name, id, designation or departments"/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </form> --}}	
                </span>
            </div>
              </div>
                            
                                    
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>


	<div class="row">
		
        
        <div class="col-md-12"> 
        </br></br>
        <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your added points for users	</h4></br>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                    <thead>
                   
                  
                   <th>User-id	</th>
                    <th>Name</th>
                     <th>Designation</th>
                   {{--  <th>E-mail</th>
                     <th>Deptarment</th>--}}
                     <th>Points &nbsp;&nbsp;&nbsp;&nbsp;Comments</th>
                     <th>Day</th>
                     <th>view</th>
                    {{--  <th>Edit</th>
                      
                       <th>Delete</th> --}}
                   </thead>
    <tbody>
    @foreach($matched_users as $ser_user)
    
    <tr>
    
    <td>{{$ser_user['member_id']}}</td>
    <td>{{$ser_user['member_name']}}</td>
    <td>Team member</td>
   {{-- <td>{{$ser_user['email']}}</td>
    <td>{{$ser_user['dept']}}</td>--}}
   <td><?php $x=0; $today_date= $todays->toDateString(); ?>
   @foreach($users_points as $ser_puser)
  <?php $update_date=$ser_puser['updated_at']->toDateString(); ?>
   @if(($ser_puser['status']=="done")&&($ser_user['member_id']==$ser_puser['team_member_id'])&&($update_date==$today_date))
           {{$ser_puser['points_of_day']}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$ser_puser['comments_of_day']}}<td>{{$ser_puser['updated_at']}} <?php $x=1; ?></td>
           
            
           
     @endif 
    
            
      @endforeach 
   

           
           
   @if($x==0)        
   <?php $passid=0;      ?>  
           
<form class="form-horizontal" role="form" method="POST" action="{{ url('/updstatus') }}" >
<select name="points_of_day" style="width: 200px;">
<option value="pending">--pending--</option>
  <option value="0">Average   "0"</option>
  <option value="1">Good      "+1"</option>
  <option value="2">Very good "+2"</option>
  <option value="-1">Bad      "-1"</option>
  <option value="-2">Very Bad "-2"</option>
  </select>
  <input name="team_member_id" type="hidden" value="{{$ser_user['id'] }}"/>
    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    </br> </br>
     <select name="point_task_name" style="width: 200px;">
  <option disabled selected > -- select task -- </option>
 @foreach($all_tasks as $tsk_for)
  @if($tsk_for['assgn_to_id']==$ser_user['member_id'])
  <?php $passid=$tsk_for['assgn_to_id']; ?>
   <option value="{{$tsk_for['task_name']}}">{{$tsk_for['task_name']}}</option>
   @endif
     
      @endforeach 
  </select></br></br> <input name="comments_of_day" type="text"  style="width: 200px;" placeholder="Comment" />
   <input name="team_member_id" type="hidden" value="{{$passid }}"/>
     
     
    
    
<!--<form class="form-horizontal" role="form" method="POST" action="{{ url('/deleteuser') }}" 
    onSubmit="return confirm('are you sure you want to delete  user named: {{ $ser_user['first_name']}} ?')">-->
                        {!! csrf_field() !!}
        </td><td>
    <button type="submit" class="btn btn-success btn-sm" data-title="update status"  >
    <span class="glyphicon glyphicon-saved"></span>
    </button></form>
           
           
           
          
      @endif 
       
        
        </td>
         <td><form class="form-horizontal" role="form" method="POST" action="{{ url('/vwdetails') }}">
                        {!! csrf_field() !!}
    <input type="hidden" name="user_id_detail"  value="{{$ser_user['member_id']}}">
    
    <button type="submit" formtarget="_blank" class="btn-info btn-sm"  data-title="Delete12345678"  >
    <span class="glyphicon glyphicon-share"></span>
    </button></p></form></td>

   {{-- <td><span id="{{$ser_user['id']}}"  > <p  title="Edit">
    <span class="glyphicon glyphicon-pencil"></span></p></span> </td>
    <td><form class="form-horizontal" role="form" method="POST" action="{{ url('/deleteuser') }}" 
    onSubmit="return confirm('are you sure you want to delete  user named: {{ $ser_user['first_name']}} ?')">
                        {!! csrf_field() !!}
    <input type="hidden" name="user_id_del"  value="{{$ser_user['id']}}">
    
    <button type="submit" class="btn btn-danger btn-sm" data-title="Delete12345678"  >
    <span class="glyphicon glyphicon-trash"></span>
    </button></p></form></td> --}}
   
     
 <script>
$(document).ready(function(){
    $("#{{$ser_user['id']}}").click(function(){
        $("#{{$disp=$ser_user['id']."abc"}}").slideToggle("slow");
    });
});
</script>
</tr>
<tr>

   
 <td colspan="9"> 
 <div  id="{{$disp=$ser_user['id']."abc"}}" style="display:none" align="center" >
 <div class="panel-body">
<form class="form-horizontal" role="form" method="POST" action="{{ url('/edituser') }}">
                        {!! csrf_field() !!}
                        <input type="hidden" name="usr_id"  value="{{$ser_user['id']}}">

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" 
                                value="{{$ser_user['first_name']}}">

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">last Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value="{{$ser_user['last_name']}}">

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('type_of') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Type Of User</label>

                            <div class="col-md-6">
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
                            
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{$ser_user['email']}}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('dept') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">dept</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="dept" value="{{$ser_user['dept']}}">

                                @if ($errors->has('dept'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dept') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Make User
                                </button>
                            </div>
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
@endsection
