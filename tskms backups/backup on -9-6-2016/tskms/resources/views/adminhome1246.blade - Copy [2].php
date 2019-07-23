@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard For Admin</div><div id="topcorner" > {{-- <a href="{{ url('/pointsys_admin') }}"><button  class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>&nbsp;&nbsp;To point system
                                </button></a> --}}&nbsp;
                                </div>
                 <div> </div>
                <div class="panel-body">
             
                   
                   {{--  <br>{{ Auth::user()->first_name }} </br>
                      <br>email  {{ Auth::user()->email }} </br>  --}}
                       
                          
                         
                      <h1>Admin dashboard </h1></br></br>
                       @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
           @if (isset($errors) && count($errors) > 0)
        <div class="alert alert-danger">
        <h2>Error Occured.... </h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif            
                   
                    <div id="panelforjobs" >
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/makeusr') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">First</label>

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
                            <label class="col-md-4 control-label">Last Name</label>

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
                            <label class="col-md-4 control-label">User type account</label>

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
                            <label class="col-md-4 control-label">E mail account</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ E mail account }}">

                                @if ($errors->has('E mail account'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
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
@if ($errors->has('Department'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Department') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-check"></i>Make New User
                                </button>
                            </div>
                        </div>
                    </form>
                        <div align="center">  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;     <button id="flipforjobsopen" class="btn btn-danger">
                               <i class="fa fa-times"></i>   Cancel at
                                </button> </div>
                    
                   
                   
                          
                         </div>
                         <!--  <button class="btn btn-primary" id="flipforjobs">
                                    <i class="fa fa-btn fa-user"></i>Add job666
                                </button>
                               -->
                               <div align="center"> <button id="flipforjobs" class="btn btn-success">
                                 Add New Users &nbsp;<i class="fa fa-sort-desc"></i> 
                                </button>  </div>
                                {{-- <div id="flipforjobs"> CLICK TO ADD USER </div> --}} <br></br></br>
                                 {{-- <div class="col-md-6"> --}} <div style="width: 400px;">
                            <form method="post" action="{{url('serc')}}" accept-charset="UTF-8">
     <!--   <input name="pass_name" type="hidden" value="{{ Session::get('name') }}"/>  -->  
            <div class="input-group">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input type="text" name="insearch" class="form-control" placeholder="Search Users by Name, id, designation or departments"/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </form>
                </span>
            </div>
              </div>
                            
                                    
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

</br></br></br></br>
	<div class="row">
		
        
        <div class="col-md-12">
        <h4>Your added users	</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped" >
                   
                    <thead>
                   
                  
                   <th>id</th>
                    <th>First Name</th>
                     <th>Designation of user</th>
                     <th>e-mail</th>
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
    <td><form class="form-horizontal" role="form" method="POST" action="{{ url('/deleteuser') }}" 
    onSubmit="return confirm('are you sure you want to delete  user named: {{ $ser_user['first_name']}} ?')">
                        {!! csrf_field() !!}
    <input type="hidden" name="user_id_del"  value="{{$ser_user['id']}}">
    
    <button type="submit" class="btn btn-danger btn-xs" data-title="Delete12345678"  >
    <span class="glyphicon glyphicon-trash"></span>
    </button></p></form></td>
   
     
 <script>
$(document).ready(function(){
    $("#{{$ser_user['id']}}").click(function(){
        $("#{{$disp=$ser_user['id']."abc"}}").slideToggle("fast");
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
                        <input type="hidden" name="usr_id"  value="{{$ser_user['id']}}">

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
                        </div>
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
                        </div>
                        
                        <div class="form-group{{ $errors->has('type_of') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">last_name</label>

                            <div class="col-md-6">
<select name="type_of">
  <option disabled selected > -- select an option -- </option>
  <option value="last_namer">last_name</option>
  <option value="last_name">last_name</option>
  <option value="last_name">last_name</option>
  </select>
@if ($errors->has('type_of'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type_of') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>

                        
                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">last_name</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email">

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
                                <button type="submit" class="btn btn-info">
                                    <i class="fa fa-btn fa-user"></i>Edit user status
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
