<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Make team--TSKMS</title>
  
 <link rel="stylesheet" href="sol.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script type="text/javascript" src="sol.js"></script>
  
  

    <title>Task Management sys</title>

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
                    {{--<li> --}} <a href="{{ url('/home') }}">{{-- Logout {{ Auth::user()->first_name }}--}}
                           </br> </br></br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                         {{--  <button  class="btn btn-primary">
                               <i class="fa fa-home"></i>  Dashboard  
                                </button>--}} {{--<span class="caret"></span>--}}
                            {{--</a> --}} <a href="{{ url('/home') }}"><button  class="btn btn-primary">
                                    <i class="fa fa-home"></i>&nbsp;&nbsp;Dashboard
                                </button></a>
                                <a href="{{ url('/pointsys') }}"><button  class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>&nbsp;&nbsp;To point system
                                </button></a>
                     <a href="{{ url('/make_team') }}"><button  class="btn btn-primary">
                                    <i class="fa  fa-object-group"></i>&nbsp;&nbsp; Team
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
                <div class="panel-heading">Dashboard For Teamleader to make team</div>
                
                
                {{--
                <a href="{{ url('/totlsdash') }}">  &nbsp; <button  class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>To main Dashboard
                                </button></a>&nbsp; --}}
                 <div> </div>
                <div class="panel-body">
             
                   
                    {{-- <br>{{ Auth::user()->first_name }} </br>
                      <br>email  {{ Auth::user()->email }} </br> --}}
                     
		 <script type="text/javascript">
    $(function() {
        // initialize sol
        $('#my-select').searchableOptionList();
    });
</script>

    <!-- JavaScripts -->
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    
                       
                          
                         
                      <h1>&nbsp;&nbsp;&nbsp;&nbsp;Team dashboard</h1>
                      
                  
                    
                         <!--  <button class="btn btn-primary" id="flipforjobs">
                                    <i class="fa fa-btn fa-user"></i>Add job666
                                </button>
                               -->
                                 
                                  <div class="col-md-6">
                          
                          
                            
                 
     </br> </br> </br> </br>
   
                     @foreach($team_detail as $teamm)
                        <div class="form-group{{ $errors->has('team_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"></label>

                            <div class="col-md-8">
                                <label class="col-md-8 control-label"></label> 
								<?php 
								$teamname=$teamm['team_name'];
								
								$teamid=$teamm['id'];
								$teamprojid=$teamm['team_project_id'];
								$teamprojname=$teamm['team_proj_name'];
								
															
								
								 ?>
                               {{-- <input name="task_name" type="hidden" value=""/>--}}
                                                   @if ($errors->has('task_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('team_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('team_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"></label>

                            <div class="col-md-14">
                                <label class="col-md-8 control-label">{{-- --}}</label>
                               {{-- <input name="task_name" type="hidden" value=""/>--}}

                                @if ($errors->has('task_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('team_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endforeach
                         <?php  $colorList[0]=0; ?>
                         @foreach($team_mem as $teammem)
                        @foreach($users_tmm_all as $teammember)
                       
                        @if($teammember['id']==$teammem['member_id'])
                      <?php  $colorList[]=$teammember['id'] ?>
                                                 	
                        @endif
                        @endforeach
                        

    
                       
                         @endforeach
                     <?php     $arrlength = count($colorList);
					 
					 $i = 0;
					
					  ?>
             <div class="form-group{{ $errors->has('type_of') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Add users</label>

                            <div class="col-md-6">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/add_mem') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            
 <select id="my-select" name="character[]" style="width: 300px;" multiple="multiple" >         
                      
                       @foreach($users_tmm_all as $teammember)
                       
                          @for ($i = 0; $i < $arrlength ; $i++)
                          @if(($teammember['id']==$colorList[$i]))
                          <?php 
						 
						   continue 2;
						   ?>
                           {{$teammember['id']}}
                          @endif
                          
    
@endfor              
             <option value="{{$teammember->first_name.'-'.$teammember->id}}">{{$teammember->first_name}}---- ID:{{$teammember->id}}</option>                 
                 
                     	
                       
            @endforeach   
            </select>
                         


@if ($errors->has('type_of'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type_of') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
								
								
                       
 {{--                       
<input type="hidden" name="mem_team_name" id="csrf-token" value="{{$teamname }}" />
<input type="hidden" name="mem_team_id" id="csrf-token" value="{{ $teamid }}" />
<input type="hidden" name="mem_team_project_id" id="csrf-token" value="{{ $teamprojid }}" />
<input type="hidden" name="member_team_proj_name" id="csrf-token" value="{{ $teamprojname }}" />
<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
<div class="form-group{{ $errors->has('team_name') ? ' has-error' : '' }}">--}}
                            <label class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                               <button type="submit" class="btn btn-success btn-sm" data-title="update status"  >
    <span class="glyphicon glyphicon-saved"></span>
    </button>
                               {{-- <input name="task_name" type="hidden" value=""/>--}}

                                @if ($errors->has('task_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('team_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
{{--<button type="submit" class="btn btn-success btn-lg" data-title="update status"  >
    <span class="glyphicon glyphicon-saved"></span>
    </button> --}}
</form>

{{-- @endif --}}
         {{--   </div>
              </div> </br>
</br> </br></br></br> <div align="left">  
<form class="form-horizontal" role="form" method="POST" action="{{ url('/datefilter') }}">
                        {!! csrf_field() !!}
    <input type="hidden" name="user_id_data"  value="{{$team_member_id}}">
    From Date : <input type="text"  id="datepicker" name="fromdate">
To Date: <input type="text" id="datepicker1" name="todate">
    <button type="submit"  class="btn-primary btn-sm"  data-title="Delete12345678"  >Search
    <span class="glyphicon glyphicon-play-circle"></span>
    </button></p></form>     --}}   
     

                            
                                    
      </div>  </br> </br>           
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>


	<div class="row">
		
        
        <div class="col-md-12">
        </h6>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped" >
                   
                    <thead>
                   
                  
                  
                   
                   <th> Team member id	</th>
                   
                    <th>member Name</th>
                   {{--  <th>Team Leader</th> --}}
                      <th>View points details</th>
                     
                    {{-- <th>Deptarment</th>
                     <th>Day Points</th>--}}
                     
                    {{-- <th>Action</th> --}}
                    {{--  <th>Edit</th> --}}
                      
                      <th>Delete</th>
                   </thead>
                   
    <tbody>
    @foreach($team_mem as $match_team)
    
     
    
    <td>{{$match_team['member_id']}}</td>
     <td>{{$match_team['member_name']}}</td>
     {{-- <td>{{$match_team['mem_team_made_by']}}</td> --}}
      {{-- <td>{{$match_team['mem_team_made_by_id']}}</td> --}}
      
      <td><form class="form-horizontal" role="form" method="POST" action="{{ url('/vwdetails') }}">
                        {!! csrf_field() !!}
    <input type="hidden" name="user_id_detail"  value="{{$match_team['member_id']}}">
    
    <button type="submit" formtarget="_blank" class="btn-info btn-sm"  data-title="Delete12345678"  >
    <span class="glyphicon glyphicon-share"></span>
    </button></p></form></td>
      
      
      
      
       
       <td><form class="form-horizontal" role="form" method="POST" action="{{ url('/delete_member') }}" 
    onSubmit="return confirm('are you sure you want to delete  user named: {{$match_team['member_name']}} ?')">
                        {!! csrf_field() !!}
    <input type="hidden" name="user_id_del"  value="{{$match_team['member_id']}}">
    
    <button type="submit" class="btn btn-danger btn-sm" data-title="Delete12345678"  >
    <span class="glyphicon glyphicon-trash"></span>
    </button></p></form></td>
        
        
    
<tr>

   
 
  
  







 
  
  
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