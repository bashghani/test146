<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Datepicker - Default functionality</title>
  
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
                    <li><a href="{{ url('/home') }}">Home</a></li>
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
                              <a href="{{ url('/logout') }}"> Logout {{ Auth::user()->first_name }} <span class="caret"></span>
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
                <div class="panel-heading">Dashboard For tls</div>
                 <div> </div>
                <div class="panel-body">
             
                   
                     <br>{{ Auth::user()->first_name }} &nbsp;{{ Auth::user()->last_name }} </br>
                     
		 <script type="text/javascript">
    $(function() {
        // initialize sol
        $('#my-select').searchableOptionList();
    });
</script>

    <!-- JavaScripts -->
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    
                       
                          
                         
                      <h1>Team members teams dashbaord to</h1>
                      
                   <?php
				   
$flag=0;



                            
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
                </form>
                </span>--}}
                            
                            
                 <form class="form-horizontal" role="form" method="POST" action="{{ url('/assign_team') }}">
     </br> </br> </br> </br>
   

                        <div class="form-group{{ $errors->has('team_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Team Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="team_name" 
                                value="" >
                               {{-- <input name="task_name" type="hidden" value=""/>--}}

                                @if ($errors->has('task_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('team_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('type_of') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Add users</label>

                            <div class="col-md-6">
                            
 <select id="my-select" name="character[]" style="width: 300px;" multiple="multiple" >
 @foreach($match_tm as $teammem)
     <option value="{{$teammem->first_name.'-'.$teammem->id}}">{{$teammem->first_name}}---- ID:{{$teammem->id}}</option>
    @endforeach
</select>
@if ($errors->has('type_of'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type_of') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                         <div class="form-group{{ $errors->has('assigned_to') ? ' has-error' : '' }}">
                            
                            
                            <label class="col-md-4 control-label">Available projects</label>
 
                            <div class="col-md-2">
<select name="team_proj_name">
  <option disabled selected > -- select projected -- </option>
 @foreach($match_proj as $project_member)
 @if($project_member['status']!="done")
 <option value="{{$project_member->project_name.'--'.$project_member->id}}">{{$project_member->project_name}}---- ID:{{$project_member->id}}
 </option>
  @endif
   @endforeach
  </select>
   
@if ($errors->has('assigned_to'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('assigned_to') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                        
<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

<button type="submit" class="btn btn-success btn-sm" data-title="update status"  >
    <span class="glyphicon glyphicon-saved"></span>
    </button>
</form>


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

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                    <thead>
                   
                  
                   <th>Team-id	</th>
                    <th>Team Name</th>
                     <th>Team Leader</th>
                     <th>team project name</th>
                    {{-- <th>Deptarment</th>
                     <th>Day Points</th>--}}
                     
                     <th>Action</th>
                    {{--  <th>Edit</th> --}}
                      
                     {{--  <th>Delete</th> --}}
                   </thead>
                   
    <tbody>
    @foreach($teams_matched as $match_team)
    <td>{{$match_team['id']}}</td>
    <td>{{$match_team['team_name']}}</td>
     <td>{{$match_team['team_made_by']}}</td>
      <td>{{$match_team['team_proj_name']}}</td>
       <td><form class="form-horizontal" role="form" method="POST" action="{{ url('/team_action') }}">
                        {!! csrf_field() !!}
    <input type="hidden" name="pass_team_id"  value="{{$match_team['id']}}">
    
    <button type="submit" formtarget="_blank" class="btn-info btn-sm"  data-title="Delete12345678"  >
    <span class="glyphicon glyphicon-share"></span>
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