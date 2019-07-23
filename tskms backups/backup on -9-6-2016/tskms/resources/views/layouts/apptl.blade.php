<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Task & point management system</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
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

<style> 
#panel, #flip, #panelforjobs, #flipforjobs {
    padding: 5px;
    text-align: center;
   
   
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
                <!-- Left Side Of Navbar --> </br> 
                <ul class="nav navbar-nav">
                 {{--   <li> --}}
                 &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;    <a href="{{ url('/home') }}">{{-- Logout {{ Auth::user()->first_name }}--}}
                               <button  class="btn btn-primary">
                               <i class="fa fa-home"></i>  Dashboard 
                                </button>{{--<span class="caret"></span>--}}
                            </a>
                 {{--   </li> 
                    <li> --}}
                    <a href="{{ url('/pointsys') }}"><button  class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>&nbsp;&nbsp;To point system
                                </button></a>
                     <a href="{{ url('/make_team') }}"><button  class="btn btn-primary">
                                    <i class="fa  fa-object-group"></i>&nbsp;&nbsp; Team
                                </button></a>    
                   <a href="{{ url('/apply_leave_application_tl_vw') }}"> {{--Logout {{ Auth::user()->first_name }} --}}
                               <button  class="btn btn-primary"> 
                             <i class="fa fa-pencil-square-o"></i>      Apply Leave   
                                </button> {{--<span class="caret"></span> --}} 
                            </a></a>
                        <a href="{{ url('/apply_short_leave_tl_vw') }}">{{-- Logout {{ Auth::user()->first_name }}--}}
                               <button  class="btn btn-primary">
                             <i class="fa fa-pencil-square-o"></i>     Apply Short leave
                                </button>{{--<span class="caret"></span>--}}
                            </a> 
                   
                  {{-- <a href="{{ url('/leave_mgt_vw') }}"><button  class="btn btn-primary">
                                    <i class="fa  fa-users"></i>&nbsp;&nbsp; Leave Management
                                </button></a> 
                                --}}
                     @if($leaves_count > 0)
                     <a href="{{ url('/leave_mgt_vw') }}"> 
                    <button type="button" class="btn btn-danger">Pending leaves <span class="badge">{{$leaves_count}}
                    </span></button>   </a> 
                    @else
                    <a href="{{ url('/leave_mgt_vw') }}"><button  class="btn btn-primary">
                                    <i class="fa  fa-users"></i>&nbsp;&nbsp; Manage Leave
                                </button></a>
                    @endif
                    
                    
                                             
                  <a href="{{ url('/ch_pswd_teamlead_vw') }}">{{-- Logout {{ Auth::user()->first_name }}--}}
                               <button  class="btn btn-primary">
                             <i class="fa fa-pencil-square-o"></i>      Change Password  
                                </button>{{--<span class="caret"></span>--}}
                            </a> {{-- </li> --}}
                            
                </ul>
                

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                      {{--  <li class="dropdown">--}}
                           </br>

                              <a href="{{ url('/logout') }}">{{-- Logout {{ Auth::user()->first_name }}--}}
                               
                                   Logout {{ Auth::user()->first_name }}  <i class="fa fa-btn fa-sign-out"></i>
                                {{--<span class="caret"></span>--}}
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                      {{--  </li> --}}
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
