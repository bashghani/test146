@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard For Admin</div>
                 <div> </div>
                <div class="panel-body">
             
                   
                     <br>{{ Auth::user()->first_name }} </br>
                      <br>email  {{ Auth::user()->email }} </br>
                       
                          
                         
                      <h1>Admin dashboard </h1>
                      
                   
                    <div id="panelforjobs" >
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
                   <!--  <form class="form-horizontal" role="form" method="POST" action="{{ url('/createjob') }}">
                        {!! csrf_field() !!}-->
                  <!--  <div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">job_title</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="job_title" value="{{ old('job_title') }}">

                                @if ($errors->has('job_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_title') }}</strong>
                                    </span>
                                @endif
                            </div>;
                        </div> 
                    <div class="form-group{{ $errors->has('job_description') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">job_description</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="job_description" 
                                value="{{ old('job_description') }}">

                                @if ($errors->has('job_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group{{ $errors->has('job_industry') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">job_industry</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="job_industry" 
                                value="{{ old('job_industry') }}">

                                @if ($errors->has('job_industry'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_industry') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group{{ $errors->has('job_sub_area') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">job_sub_area</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="job_sub_area" 
                                value="{{ old('job_sub_area') }}">

                                @if ($errors->has('job_sub_area'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_sub_area') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group{{ $errors->has('no_of_positions') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">no_of_positions</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="no_of_positions" 
                                value="{{ old('no_of_positions') }}">

                                @if ($errors->has('no_of_positions'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_of_positions') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                     <div class="form-group{{ $errors->has('job_shift') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">job_shift</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="job_shift" 
                                value="{{ old('job_shift') }}">

                                @if ($errors->has('job_shift'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_shift') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group{{ $errors->has('job_location') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">job_location</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="job_location" 
                                value="{{ old('job_shift') }}">

                                @if ($errors->has('job_location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group{{ $errors->has('gender_req') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">gender_req</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="gender_req" 
                                value="{{ old('gender_req') }}">

                                @if ($errors->has('gender_req'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender_req') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                         <div class="form-group{{ $errors->has('min_edu_req') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">min_edu_req</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="min_edu_req" 
                                value="{{ old('min_edu_req') }}">

                                @if ($errors->has('min_edu_req'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('min_edu_req') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group{{ $errors->has('career_level') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">career_level</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="career_level" 
                                value="{{ old('career_level') }}">

                                @if ($errors->has('career_level'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('career_level') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group{{ $errors->has('minimum_exp_req') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">minimum_exp_req</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="minimum_exp_req" 
                                value="{{ old('minimum_exp_req') }}">

                                @if ($errors->has('minimum_exp_req'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('minimum_exp_req') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group{{ $errors->has('apply_by') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">apply_by</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="apply_by" 
                                value="{{ old('apply_by') }}">

                                @if ($errors->has('apply_by'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apply_by') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group{{ $errors->has('salary_range') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">salary_range</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="salary_range" 
                                value="{{ old('apply_by') }}">

                                @if ($errors->has('salary_range'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('salary_range') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                    
                    <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>create job
                                </button>
                                </form>-->
                       <div id="flipforjobsopen" > Cancel adding new Users           </div>
                    
                   
                   
                          
                         </div>
                         <!--  <button class="btn btn-primary" id="flipforjobs">
                                    <i class="fa fa-btn fa-user"></i>Add job666
                                </button>
                               -->
                                 <div id="flipforjobs"> CLICK TO ADD USER </div>
                                  <div class="col-md-6">
                            <form method="post" action="{{url('serc')}}" accept-charset="UTF-8">
     <!--   <input name="pass_name" type="hidden" value="{{ Session::get('name') }}"/>  -->  
            <div class="input-group">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input type="text" name="insearch" class="form-control" placeholder="Search Users by Name, id, designation or department"/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
              </div>
                            
                                    
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>


	<div class="row">
		
        
        <div class="col-md-12">
        <h4>Your added users	</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                    <thead>
                   
                  
                   <th>User-id</th>
                    <th>Name</th>
                     <th>Designation</th>
                     <th>E-mail</th>
                     <th>Deptarment</th>
                      <th>Edit</th>
                      
                       <th>Delete</th>
                   </thead>
    <tbody>
    @foreach($matched_users as $ser_user)
    
    <tr>
    
    <td>{{$ser_user['id']}}</td>
    <td>{{$ser_user['first_name']}}</td>
    <td>{{$ser_user['type_of']}}</td>
    <td>{{$ser_user['email']}}</td>
    <td>{{$ser_user['dept']}}</td>
    <td><span id="{{$ser_user['id']}}"  > <p  title="Edit">
    <span class="glyphicon glyphicon-pencil"></span></p></span> </td>
    <td><a href="delete"><button class="btn btn-danger btn-xs" data-title="Delete1234"  ><span class="glyphicon glyphicon-trash"></span></button></a></p></td>
   
     
 <script>
$(document).ready(function(){
    $("#{{$ser_user['id']}}").click(function(){
        $("#{{$disp=$ser_user['id']."abc"}}").slideToggle("slow");
    });
});
</script>
</tr>
<tr>

   
 <td colspan="8"> 
 <div  id="{{$disp=$ser_user['id']."abc"}}" style="display:none" align="center" >
 <div class="panel-body">
<form class="form-horizontal" role="form" method="POST" action="{{ url('/edituser') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">first_name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" 
                                value="{{$ser_user['first_name']}}">

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div></br>
                          <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">last_name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value="{{$ser_user['last_name']}}">

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div></br>
                        
                        <div class="form-group{{ $errors->has('type_of') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">type of user</label>

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
                            
                        </div></br>

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
                        </div></br>

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
                        </div></br>

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
                        </div></br>
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
                        </div></br>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Make User
                                </button>
                            </div>
                        </div><input type="hidden" name="usr_id"  value="{{$ser_user['id']}}">
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
