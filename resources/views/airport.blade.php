<!DOCTYPE html>
<html lang="en">
<head>
<title>Airport Transfer-OakwellRex taxis</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="OakwellRex Taxis are proud to be the largest taxi firm in north Kirklees with 500 plus cars  executive cars and mini buses.">
<meta name="keywords" content="cheap taxi fare,app booking taxi,Mirfield Taxi,HeckmondWike taxi,Cleckheaton taxi,Birkenshaw taxi,Drighlington taxi,Gildersome taxi,Ossett Taxi,Dewsbury taxi,Batley taxi,Bristall taxi" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- pop-up-box -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up-box -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
 <link rel="shortcut icon" href="ico/favicon.ico">
 <!-- Stylesheet -->
 <link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link href="css/style1.css" rel='stylesheet' type='text/css' />
	<!-- //Stylesheet -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat+Alternates:200,400,500,600,700" rel="stylesheet">
     <link rel="shortcut icon" href="ico/favicon.ico">
	<!--//fonts-->
</head>
	
<body>
	<style>

			.book-agileinfo-form input[type="text"], .book-agileinfo-form input[type="email"], select#country, select#country1,input#timepicker {
				padding-top:10px;
				padding-right: 0px;
				padding-bottom: 10px;
				padding-left: 0px;
					  
				  }
				  input#datepicker{
			  
					  padding-top:8px;
				padding-right: 0px;
				padding-bottom: 10px;
				padding-left: 0px;
			  
				  }
				  
	</style>
<!-- header -->
<script>
		var placeSearch, autocomplete, geocoder;
	   
	   function initAutocomplete() {
		 geocoder = new google.maps.Geocoder();
		 autocomplete = new google.maps.places.Autocomplete(
			 (document.getElementById('autocomplete')),
			 {/*types: ['(cities)'],*/componentRestrictions: {country: 'uk'}}
			 
			 
			 );
	   
		 autocomplete.addListener('place_changed', fillInAddress);
		 autocomplete2 = new google.maps.places.Autocomplete(document.getElementById('autocomplete2'), { /*types: ['(cities)'],*/componentRestrictions: {country: 'uk'} });
	   google.maps.event.addListener(autocomplete2, 'place_changed', function() {
		 fillInAddress();
	   });
	   }
	   
	   function codeAddress(address) {
		   geocoder.geocode( { 'address': address}, function(results, status) {
			 if (status == 'OK') {
			   alert(results[0].geometry.location);
			 } else {
			   alert('Geocode was not successful for the following reason: ' + status);
			 }
		   });
		 }
	   
	   function fillInAddress() {
		 var place = autocomplete.getPlace();
		 alert(place.place_id);
		 //   codeAddress(document.getElementById('autocomplete').value);
	   }
	   
	   
	   </script>
<style>
		.bg-agile {
			width: 100%;
			margin: 0 auto;
		}
</style>
<style>

.switch {
  position: relative;
  height: 26px;
  width: 120px;
  margin: 20px auto;
  background: rgba(0, 0, 0, 0.25);
  border-radius: 3px;
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
}

.switch-label {
  position: relative;
  z-index: 2;
  float: left;
  width: 58px;
  line-height: 26px;
  font-size: 11px;
  color: rgba(255, 255, 255, 0.35);
  text-align: center;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.45);
  cursor: pointer;
}
.switch-label:active {
  font-weight: bold;
}

.switch-label-off {
  padding-left: 2px;
}

.switch-label-on {
  padding-right: 2px;
}


.switch-input {
  display: none;
}
.switch-input:checked + .switch-label {
  font-weight: bold;
  color: #e61c28;
  text-shadow: 0 1px rgba(255, 255, 255, 0.25);
  -webkit-transition: 0.15s ease-out;
  -moz-transition: 0.15s ease-out;
  -ms-transition: 0.15s ease-out;
  -o-transition: 0.15s ease-out;
  transition: 0.15s ease-out;
  -webkit-transition-property: color, text-shadow;
  -moz-transition-property: color, text-shadow;
  -ms-transition-property: color, text-shadow;
  -o-transition-property: color, text-shadow;
  transition-property: color, text-shadow;
}
.switch-input:checked + .switch-label-on ~ .switch-selection {
  left: 60px;
  /* Note: left: 50%; doesn't transition in WebKit */
}

.switch-selection {
  position: absolute;
  z-index: 1;
  top: 2px;
  left: 2px;
  display: block;
  width: 58px;
  height: 22px;
  border-radius: 3px;
  background-color: #65bd63;
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #9dd993), color-stop(100%, #65bd63));
  background-image: -webkit-linear-gradient(top, #9dd993, #65bd63);
  background-image: -moz-linear-gradient(top, #9dd993, #65bd63);
  background-image: -ms-linear-gradient(top, #9dd993, #65bd63);
  background-image: -o-linear-gradient(top, #9dd993, #65bd63);
  background-image: linear-gradient(top, #9dd993, #65bd63);
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), 0 0 2px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), 0 0 2px rgba(0, 0, 0, 0.2);
  -webkit-transition: left 0.15s ease-out;
  -moz-transition: left 0.15s ease-out;
  -ms-transition: left 0.15s ease-out;
  -o-transition: left 0.15s ease-out;
  transition: left 0.15s ease-out;
}
.switch-blue .switch-selection {
  background-color: #3aa2d0;
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #4fc9ee), color-stop(100%, #3aa2d0));
  background-image: -webkit-linear-gradient(top, #ffff01, #ffff01);
  background-image: -moz-linear-gradient(top, #ffff01, #ffff01);
  background-image: -ms-linear-gradient(top, #ffff01, #ffff01);
  background-image: -o-linear-gradient(top, #ffff01, #ffff01);
  background-image: linear-gradient(top, #ffff01, #ffff01);
}
.switch-yellow .switch-selection {
  background-color: #c4bb61;
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #e0dd94), color-stop(100%, #c4bb61));
  background-image: -webkit-linear-gradient(top, #e0dd94, #c4bb61);
  background-image: -moz-linear-gradient(top, #e0dd94, #c4bb61);
  background-image: -ms-linear-gradient(top, #e0dd94, #c4bb61);
  background-image: -o-linear-gradient(top, #e0dd94, #c4bb61);
  background-image: linear-gradient(top, #e0dd94, #c4bb61);
}

</style>

	<div class="header" style="position: fixed;z-index:9999;background-color:#feed01; ">
		<div class="container">
			<div class="agile_header_grid" >
				<div class="w3_agile_logo wow fadeInDownBig">
				<!--	<h1><a href="index.html"><span><i class="fa fa-taxi" aria-hidden="true"></i>
</span></a>&nbsp;Oakwell & Rex Taxis</h1> -->
<img src="images/logowhite.jpg" alt="1" title="1" id="wows1_0" class="hidden-xl hidden-lg hidden-md hidden-sm"/>
<img src="images/logowhite-large.jpg" alt="1" title="1" id="wows1_0" class="hidden-xs"/>

				</div>
				<div class="agileits_w3layouts_sign_in">
					<ul>
						<!--<li><a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign In</a></li> -->
                        <!-- <a href="https://book.autocab.net/35009" target="_blank"><button type="button" class="btn btn-info" style="color:yellow"><i class="fa fa-taxi" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;BOOK A TAXI ONLINE</button></a> -->
						<li style="padding-top: 20px;" class="hidden-xl hidden-lg hidden-md hidden-sm"><a href="tel:+44 1924 471111" style="padding-left:13px;padding-right:12px;">Tap To Call +44 1924 471111</a>				<!-- Call us : <span>+44 1924 471111 -->
						</span></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3_agileits_nav">
				<nav class="navbr navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							Menu
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>

						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li ><a href="{{ url('/')}}"class="hvr-sweep-to-bottom" >Home</a></li>
								<li><a href="{{ url('/services')}}" class="hvr-sweep-to-bottom">Services</a></li>
								<li><a href="{{ url('/about')}}" class="hvr-sweep-to-bottom">About</a></li>
								<li class="active"><a href="{{ url('/airport')}}" class="hvr-sweep-to-bottom">Airport Transfers</a></li>
								<!-- <li class="dropdown">
									<a href="#" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li><a href="icons.html">Web Icons</a></li>
										<li><a href="typography.html">Typography</a></li>
									</ul>
								</li> -->
								<li><a href="{{ url('/portfolio')}}" class="hvr-sweep-to-bottom">Portfolio</a></li>
								<li><a href="{{ url('/accounts')}}" class="hvr-sweep-to-bottom">Accounts</a></li>
								<li><a href="{{ url('/contact')}}" class="hvr-sweep-to-bottom">Contact</a></li>
								<li><a href="https://book.autocab.net/35009" class="hvr-sweep-to-bottom" target="_blank">Book Taxi</a></li>
							</ul>
							<!--	<div class="agileinfo_search">
                                    <form action="#" method="post">
                                        <input type="text" name="Search" placeholder="Type text here..." required="">
                                        <input type="submit" value=" ">
                                    </form>
                                </div> -->
						</nav>
					</div>
				</nav>
			</div>
		</div>
	</div>
    <br> <br> <br> <br><br> <br> <br>
<!-- //header -->
<!-- pop-up-box -->
	
	
<!-- //pop-up-box -->	
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {
	$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',
		fixedContentPos: false,
		fixedBgPos: true,
		overflowY: 'auto',
		closeBtnInside: true,
		preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});
																	
	});
</script>
<!-- START BOOKING FORM -->

<!-- END BOOKING FORM -->
<!-- banner -->	
	<!-- banner -->	
	<div class=""  >
	<br><br> <div class="hidden-xl hidden-lg hidden-md"><br></div>
	<!-- removed slider from here -->

	</div>


	<div class="bg-agile">
		<div class="left-agileits-w3layouts-img">
			<!-- <h3>What we provide you</h3>
			<ul>
				<li><span>.</span>24x7 Cab service are available</li>
				<li><span>.</span>Online booking facility</li>
				<li><span>.</span>GPS Tracking system</li>
				<li><span>.</span>Credit and debit card payment facility</li>
			</ul>
			<p></p> -->
		</div>
		<div class="book-appointment">
			<!-- <h6>Personal Details</h6> -->
			<div class="book-agileinfo-form">
				<form action="#" method="post">
					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<input type="text" name="Name" placeholder="Full Name" required="" style="color:yellow;">
						</div>
						<div class="agileits-btm-spc form-text2">
							<input type="text" name="Phone no" placeholder="Phone number" required="" style="color:yellow;">
						</div>
					</div>
					<div class="agileits-btm-spc form-text">
						<input type="email" name="email" placeholder="Email" required="" style="color:yellow;">
					</div>
					<div class="clear"></div>
					<div class="agileits-btm-spc form-text">
					<div class="switch switch-blue">
          <input type="radio" class="switch-input" name="ASAP" value="week2" id="week2" checked>
          <label for="week2" class="switch-label switch-label-off">ASAP</label>
          <input type="radio" class="switch-input" name="ASAP" value="month2" id="month2">
          <label for="month2" class="switch-label switch-label-on">LATER</label>
          <span class="switch-selection"></span>
        </div>
					</div>
					<div class="clear"></div>
					<div class="agileits-btm-spc form-text">
						<input type="email" name="flight" placeholder="Flight Number & Airport" required="" style="color:yellow;">
					</div>
					<div class="clear"></div>

					<!-- <h2 class="sub-head-w3ls">Booking Details</h2> -->
					<div class="main-agile-sectns" id="dt_tm" style="display=none;">
						<div class="agileits-btm-spc form-text1">
							<input id="datepicker" name="Text" type="text" placeholder="Pick-up Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
							    style="color:yellow;">
						</div>
						<div class="clear"></div>
						<div class="agileits-btm-spc form-text2" style="padding-top:0px;padding-right: 0px;padding-bottom:0px;padding-left: 0px;">
							<input type="text" id="timepicker" name="Time" class="timepicker form-control" placeholder="Pick-up Time" value="" style="color:yellow;">
						</div>
					</div>
					
					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<input id="autocomplete" type="text" name="Pick-up Location" placeholder="Pick-up Location" required="" style="color:yellow;">
						</div>
						<div class="agileits-btm-spc form-text2">
							<input id="autocomplete2" type="text" name="Drop-off Location" placeholder="Drop-off Location" required="" style="color:yellow;">
                            <script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initAutocomplete" async defer>
 
  
  
  </script>
						</div>
					</div>

					<!-- <div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
												<option value="">No.of Passengers</option>
												<option value="">1</option>
												<option value="">2</option>
												<option value="">3</option>         
												<option value="">4</option>
												<option value="">5</option>
											</select>
						</div>
						<div class="agileits-btm-spc form-text2">
							<select id="country" onchange="change_country(this.value)" class="frm-field required">
												<option value="">Direction</option>
												<option value="">Only One Way</option>
												<option value="">Return</option>       
											</select>
						</div>
					</div> -->
					<!-- <div class="wthree-text">
						<h6>Select your Package</h6>
						<ul class="radio-w3ls">
							<li>
								<input type="radio" id="a-option" name="selector1">
								<label for="a-option">Regular</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="b-option" name="selector1">
								<label for="b-option">Van</label>
								<div class="check">
									<div class="inside"></div>
								</div>
							</li>
							<li>
								<input type="radio" id="c-option" name="selector1">
								<label for="c-option">Executive</label>
								<div class="check">
									<div class="inside"></div>
								</div>
							</li>
						</ul>
						<div class="clear"></div>
					</div> -->
					<input type="submit" value="Submit">
					<input type="reset" value="Reset">
					<div class="clear"></div>
				</form>
			</div>

		</div>
	</div>
<!-- //banner -->
<!-- //banner -->		
<!-- services -->
	<div class="services">
		<div class="container">
			<div class="w3_agile_services_grids">
				<div class="col-md-4 w3_agile_services_grid">
					<div class="agile_services_grid">
						<div class="hover06 column">
							<div>
								<figure><img src="images/man.jpg" alt=" " class="img-responsive" /></figure>
							</div>
						</div>
						<div class="agile_services_grid_pos">
							<i class="fa fa-plane" aria-hidden="true"></i>
						</div>
					</div>
					<h4>Manchester Airport</h4>
					<p>We provide full services from Manchester airport</p>
				</div>
				<div class="col-md-4 w3_agile_services_grid">
					<div class="agile_services_grid">
						<div class="hover06 column">
							<div>
								<figure><img src="images/liverpool.jpg" alt=" " class="img-responsive" /></figure>
							</div>
						</div>
						<div class="agile_services_grid_pos">
							<i class="fa fa-plane" aria-hidden="true"></i>
						</div>
					</div>
					<h4>John Lennon airport Liverpool</h4>
					<p>We provide full services fromJohn Lennon airport Liverpool.</p>
				</div>
				<div class="col-md-4 w3_agile_services_grid">
					<div class="agile_services_grid">
						<div class="hover06 column">
							<div>
								<figure><img src="images/brad.jpg" alt=" " class="img-responsive" /></figure>
							</div>
						</div>
						<div class="agile_services_grid_pos">
							<i class="fa fa-plane" aria-hidden="true"></i>
						</div>
					</div>
					<h4>Leeds Bradford airport</h4>
					<p>We provide full services fromLeeds Bradford airport.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->
<!-- services-bottom -->
	<div class="services-bottom">
		<div class="container">
			<h3>a satisfied customer is the best business strategy of all</h3>
		</div>
	</div>
<!-- //services-bottom -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-4 w3_footer_grid">
					<div class="w3_agile_logo wow fadeInLeftBig">
					<h2><a href="index.html"><span><i class="fa fa-taxi" aria-hidden="true"></i>
</span></a>&nbsp;OakwellRex Taxis</h2>
				</div>
					<!-- <p>Moving Kirklees</p> -->
				</div>
				<div class="col-md-3 w3_footer_grid">
					<div class="w3l_footer_grid">
						<i class="fa fa-home" aria-hidden="true"></i>
					</div>
					<h4>Address</h4>
					<p> 2 Camroyd St, Dewsbury,<br> West Yorkshire, England UK.<br>WF13 1PG</p>
				</div>
				<div class="col-md-2 w3_footer_grid">
					<div class="w3l_footer_grid">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<h4>Call Us</h4>
					<p>+(44)-1924 471111
					<!-- <span>+(123) 456 780 344</span> -->
					</p>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<div class="w3l_footer_grid">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>
					<h4>Mail Us</h4>
					<p><a href="mailto:info@oakwelltaxis.co.uk">info@oakwelltaxis.co.uk</a>
						<!-- <span><a href="mailto:info@example.com">info@example2.com</a></span> -->
						</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="container">
			<div class="w3ls_copyright_left">
				<ul>
				<li><a href="{{ url('/')}}">Home</a></li>
					<li><a href="{{ url('/services')}}">Services</a></li>
					<li><a href="{{ url('/about')}}">About</a></li>
					<li  class="active"><a href="{{ url('/airport')}}">Airport Transfers</a></li>
					<li><a href="{{ url('/portfolio')}}">Portfolio</a></li>
					<li><a href="{{ url('/accounts')}}">Accounts</a></li>	
					<li><a href="{{ url('/contact')}}">Contact</a></li>
				</ul>
				<p>© 2019 All Rights Reserved <a href="https://play.google.com/store/apps/details?id=com.autocab.taxibooker.oakwellandrex.dewsbury&hl=en">OakwellRex Taxis</a></p>
			</div>
			<div class="w3ls_copyright_right">
				<ul>
					<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- Time -->
	<script type="text/javascript" src="js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker').wickedpicker({
			twentyFour: false
		});
	</script>
	<!--// Time -->
	<!-- Calendar -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#dt_tm").hide();
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<script>
    $("#week2").click(function() {
    // this function will get executed every time the #home element is clicked (or tab-spacebar changed)
    if($(this).is(":checked")) // "this" refers to the element that fired the event
    {
        $("#datepicker").val('');
		$("#timepicker").val('');
		$("#dt_tm").hide();
		
		
		//alert('Agree');
    }
    else {
        alert('home is un checked');
   }
});
$("#month2").click(function() {
    // this function will get executed every time the #home element is clicked (or tab-spacebar changed)
    if($(this).is(":checked")) // "this" refers to the element that fired the event
    {      $("#datepicker").val('');
		$("#timepicker").val('');
        $("#dt_tm").show();
    }
    
});
   
	</script>
	
</body>
</html>