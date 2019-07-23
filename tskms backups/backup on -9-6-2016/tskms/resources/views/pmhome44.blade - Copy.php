@extends('layouts.apppm')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard For project manager</div>
                 <div> </div>
                <div class="panel-body">
             
                   
                   {{--  <br>{{ Auth::user()->first_name }} </br>
                      <br>email  {{ Auth::user()->email }} present yes </br> --}}
                       @foreach($matched_tls as $teamleaders)
                      
                       
                       @endforeach
                          
                         
                      <h1>Project manager dashboard </h1></br></br></br>
                       @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
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
                            <label class="col-md-4 control-label">Start Date</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="start_date" 
                                value="{{ old('start_date') }}" required>

                                @if ($errors->has('start_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('expected_comp_date') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Expected Compliton date</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="expected_comp_date" 
                                value="{{ old('expected_comp_date') }}" required>

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
                      {{-- <div id="flipforjobsopen" > Cancel adding new project       </div> --}}
                <div align="center">  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;     <button id="flipforjobsopen" class="btn btn-danger">
                               <i class="fa fa-times"></i>   Cancel Adding Project
                                </button> </div>
                    
                   
                   
                          
                         </div>
                         <!--  <button class="btn btn-primary" id="flipforjobs">
                                    <i class="fa fa-btn fa-user"></i>Add job666
                                </button>
                               -->
                               
                               
                               <div align="center"> <button id="flipforjobs" class="btn btn-success">
                                 Add New project &nbsp;<i class="fa fa-sort-desc"></i> 
                                </button>  </div>
                                 
                                {{-- <div id="flipforjobs"> CLICK TO ADD MORE PROJECT </div> --}}
                                 </br></br></br>
                                {{--  <div class="col-md-6"> --}} <div style="width: 400px;">
                            <form method="post" action="{{url('sercProj')}}" accept-charset="UTF-8">
     <!--   <input name="pass_name" type="hidden" value="{{ Session::get('name') }}"/>  -->  
            <div class="input-group">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input type="text" name="insearch" class="form-control" placeholder="Search Projects by Name, id or Teamlead"/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
                </span>
                </form>
                
            </div>
              </div>
                            
                                    
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>


	<div class="row">
		
        
        <div class="col-md-12">
        </br>   </br>   </br>   
        <h4>Your added Projects	</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                    <thead>
                  <tr> 
                  
                   <th>Project-id</th>
                    <th>Project name</th>
                     <th>Assigned to</th>
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
                        <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">start Date</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="start_date" 
                                value="{{ $ser_proj['start_date']}}">

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
                                <input type="text" class="form-control" name="expected_comp_date" 
                                value="{{ $ser_proj['expected_comp_date']}}">

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
@endsection
