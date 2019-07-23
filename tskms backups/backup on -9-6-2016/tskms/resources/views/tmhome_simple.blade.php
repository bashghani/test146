@extends('layouts.apptm')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard For Team member</div><div id="topcorner" > 
                                <a href="{{ url('/alltasks_mem') }}"><button  class="btn btn-info">
                                    <i class="fa fa-btn fa-user"></i>All tasks
                                </button></a> 
                                
                                <a href="{{ url('/cancelled_tasks_mem') }}"><button  class="btn btn-info">
                                    <i class="fa fa-btn fa-user"></i>Cancelled tasks
                                </button></a>  
                                
                                <a href="{{ url('/completed_tasks_mem') }}"><button  class="btn btn-info">
                                    <i class="fa fa-btn fa-user"></i>Completed tasks
                                </button></a> 
                                                                
                                
                                <a href="{{ url('/active_tasks_mem') }}"><button  class="btn btn-info">
                                    <i class="fa fa-btn fa-user"></i>Active tasks
                                </button></a> 
                                 @if($pending_task_count > 0)
                     <a href="{{ url('/overdue_tasks_tm') }}"> 
                    <button type="button" class="btn btn-danger">Over due tasks <span class="badge">{{$pending_task_count}}
                    </span></button>   </a> 
                    
                    @endif
                                </a> </div>
                 <div> </div>
                <div class="panel-body">
                @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-success') }}"><i class="fa fa-check"></i>
{{ Session::get('message') }}</p>
@endif
                      
                @foreach($matched_users as $ser_user1)
                </br></br></br>
        <div id="tmdet">
        <h4> {{$ser_user1['name']}}	</h4>
         <h6>  
        
        <h4>  {{$ser_user1['first_name']}}
          {{$ser_user1['last_name']}}</h4><br>
          Team member ID  {{$team_member_id=$ser_user1['id']}}
         <br>Email  {{$ser_user1['email']}}
          <br>Designation {{-- {{$ser_user1['type_of']}} --}}&nbsp;Team member
           <br>Deparatment &nbsp;  {{$ser_user1['dept']}}
           </div>
         @endforeach	
                       
             
                   
                                  <div class="col-md-6">
                                  {{--
                            <form method="post" action="{{url('sercProj')}}" accept-charset="UTF-8">
     <!--   <input name="pass_name" type="hidden" value="{{ Session::get('name') }}"/>  -->  
            <div class="input-group">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input type="text" name="insearch" class="form-control" placeholder="Search Projects by Name, id or Teamlead"/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
                </span> </form> --}}
            </div>
              </div>
                            
                                    
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>


	<div class="row">
		
        
        <div class="col-md-12"></br></br>
        <h3>&nbsp;&nbsp;&nbsp;&nbsp; Tasks assigned to you	</h3></br>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                    <thead>
                  <tr> 
                  
                   <th>Task-id</th>
                    <th>Task Name</th>
                  {{--   <th>Assigned to</th> --}}
                  {{--    <th>Assigned to member id</th> --}}
                     <th>Task description</th>
                     <th>Project of task</th>
                     <th>Status</th>
                      <th>Total time</th>
                      <th>view details</th>
                      
                      <th>To dos</th>
                       </tr>
                   </thead>
    <tbody>
    @foreach($matched_tasks as $ser_proj)
    
    <tr>
    
    <td>{{ $ser_proj['id']}}</td>
    <td style="width: 200px;">{{ $ser_proj['task_name']}}</td>
 {{--   <td>{{$ser_proj['task_assigned_to']}}</td> --}}
    {{-- <td>{{$ser_proj['assgn_to_id']}}</td>  --}}
    <td style="width: 200px;">{{$ser_proj['task_description']}}</td>
    <td>{{$ser_proj['task_project_name']}}</td>
    <td>{{$ser_proj['status']}}</td>
     <td> 
	  
	  
	  <?php  
	  $totalseconds=$ser_proj['task_total_time']*60*60;
	  
	 echo gmdate("H:i:s",$totalseconds);

	     ?>{{--{{$ser_proj['task_total_time']}} echo Carbon::now()->addHours(8.4)->diffForHumans(); --}}</td>
    
    <td><span id="{{$ser_proj['id']}}"  > <p  title="view details">
    <span class="glyphicon glyphicon-th-large"></span></p></span> </td>
   {{-- <td><form class="form-horizontal" role="form" method="POST" action="{{ url('/deleteproject') }}" 
    onSubmit="return confirm('are you sure you want to delete  withname {{ $ser_proj['project_name']}} ?')">
                        {!! csrf_field() !!}
    <input type="hidden" name="proj_id_del"  value="{{$ser_proj['id']}}">
    
    <button type="submit" class="btn btn-danger btn-xs" data-title="Delete12345678"  >
    <span class="glyphicon glyphicon-trash"></span>
    </button></p></form></td>--}}
     <td><form class="form-horizontal" role="form" method="POST" action="{{ url('/view_to_dos_tm') }}">
                        {!! csrf_field() !!}
    {{--  <input type="hidden" name="status"  value="{{ $detail_leaves['status']}}"> --}}
    <input type="hidden" name="task_id_detail"  value="{{ $ser_proj['id']}}">
     <input type="hidden" name="task_name_detail"  value="{{ $ser_proj['task_name']}}">
      <input type="hidden" name="task_proj_name"  value="{{ $ser_proj['task_project_name']}}">
       <input type="hidden" name="task_tl_id"  value="{{ $ser_proj['task_assigned_by_id']}}">
       <input type="hidden" name="task_tl_name"  value="{{ $ser_proj['task_assigned_by']}}">
    
    <button type="submit" formtarget="_blank" class="btn-info btn-sm"  data-title="view Report"  >
    <span class="glyphicon glyphicon-share"></span>
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
 <form class="form-horizontal" role="form" method="POST" action="{{ url('/comp_task') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('task_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Task name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="task_name" 
                                value="{{ $ser_proj['task_name']}}" disabled>
                                <input name="task_name" type="hidden" value="{{ $ser_proj['task_name']}}"/>

                                @if ($errors->has('task_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('task_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('task_assigned_to') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Task assigned to</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="task_assigned_to" 
                                value="{{$ser_proj['task_assigned_to']}}" disabled>
                              <input name="task_assigned_to" type="hidden" value="{{ $ser_proj['task_assigned_to']}}"/>
                              <input name="id" type="hidden" value="{{ $ser_proj['id']}}"/>

                                @if ($errors->has('task_assigned_to'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('task_assigned_to') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          
                        <div class="form-group{{ $errors->has('task_description') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Task description</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="task_description" 
                                value="{{$ser_proj['task_description']}}" disabled>
                               <input name="task_description" type="hidden" value="{{ $ser_proj['task_description']}}"/>


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
                                value="{{$ser_proj['task_project_name']}}" disabled>
                                 <input name="task_project_name" type="hidden" 
                                 value="{{ $ser_proj['task_project_name']}}"/>

                                @if ($errors->has('task_project_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('task_project_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                      {{--  <div class="form-group{{ $errors->has('task_comp_comment') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Add task completion comment</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="task_comp_comment" 
                                value="{{$ser_proj['task_comp_comment']}}">

                                @if ($errors->has('task_comp_comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('task_comp_comment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}
                      {{--   <div class="form-group{{ $errors->has('type_of') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
<select name="status">
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
                            
                        </div> --}}
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="status1" 
                                value="{{$ser_proj['status']}}" disabled>
                                 <input name="status" type="hidden" 
                                 value="{{ $ser_proj['status']}}"/>

                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         
                        <div class="form-group{{ $errors->has('created_at') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Assigned On date</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="created_at" 
                                value="{{$ser_proj['created_at']}}" disabled>
                                

                                @if ($errors->has('created_at'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('created_at') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('task_expected_comp_date') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Task expected compliton date</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="task_expected_comp_date" 
                                value="{{$ser_proj['task_expected_comp_date']}}" disabled>
                                 <input name="task_expected_comp_date" type="hidden" 
                                 value="{{ $ser_proj['task_expected_comp_date']}}"/>

                                @if ($errors->has('task_expected_comp_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('task_expected_comp_date') }}</strong>
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
                               {{-- <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Update Task Status
                                </button> --}}
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