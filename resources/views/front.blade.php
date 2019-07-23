<!DOCTYPE html>
<html lang="en">
<head>
<title>OAKWELLREX TAXIS</title>
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
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<!-- Stylesheet -->
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<link rel="stylesheet" href="css/jquery-ui.css" />
	
	<!-- //Stylesheet -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
              new WOW().init();
              </script>
<!-- //js -->
<!-- pop-up-box -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up-box -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
 <link rel="stylesheet" href="css/animate.css">
 <link rel="shortcut icon" href="ico/favicon.ico">
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>
	
<body style="background-color:#81007f;">
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
<!-- header -->
<style>
 .modal-backdrop {
    z-index: 100000 !important;
  }

  .modal {
    z-index: 100001 !important;
		
	}
	.book-appointment{
		background-color:#81007F;	
	}
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
<style>
		.bg-agile {
			width: 100%;
			margin: 0 auto;
		}

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
<div class="header" style="position: fixed;z-index:9999;background-color:#FFFF00;">
		<div class="container">
			
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
								<li class="active"><a href="{{ url('/')}}">Home</a></li>
								<li><a href="{{ url('/services')}}" class="hvr-sweep-to-bottom">Services</a></li>
								<li><a href="{{ url('/about')}}" class="hvr-sweep-to-bottom">About</a></li>
								<li><a href="{{ url('/airport')}}" class="hvr-sweep-to-bottom">Airport Transfers</a></li>
								
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
                                <!-- <li><a href="https://book.autocab.net/35009" class="hvr-sweep-to-bottom" target="_blank">Books a taxis</a></li> -->
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
<!-- banner -->	
	<div class=""  >
	<br><br><br><br>  <div class="hidden-xl hidden-lg hidden-md"><br></div>
	<!-- removed slider from here -->
		</div>


	<div class="bg-agile" style="">
		<!-- start back div -->
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
          <input type="radio" class="switch-input" name="ASAP" value="ASAP" id="week2" checked>
          <label for="week2" class="switch-label switch-label-off">ASAP</label>
          <input type="radio" class="switch-input" name="ASAP" value="LATER" id="month2">
          <label for="month2" class="switch-label switch-label-on">LATER</label>
          <span class="switch-selection"></span>
		</div>
		
		<!-- end back div -->
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
					<input type="submit" value="Get Rates">
					
					<div class="clear"></div>
					
				</form>
			</div>

		</div>
	</div>
<!-- //banner -->
<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/1.jpg" alt="1" title="1" id="wows1_0"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="data1/images/1.jpg" title="1"><span><img src="data1/tooltips/1.jpg" alt="1"/>1</span></a>
		<a href="data1/images/2.jpg" title="2"><span>2</span></a>
		<a href="data1/images/3.jpg" title="3"><span>3</span></a>
		<a href="data1/images/4.jpg" title="4"><span>4</span></a>
		<a href="data1/images/5.jpg" title="5"><span>5</span></a>
		<a href="data1/images/6.jpg" title="6"><span>6</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">slideshow javascript</a> by WOWSlider.com v8.8</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content" style="background-color:#FFFF00">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<img src="images/logowhite-large.jpg" alt=" " class="img-responsive center-block" />
											
				</div>
				<section>
					<div class="modal-body">
					
						<h2 style="color:#491265;" align="center"><u>Download Our APP</u></h2>
						<p>Download our Free Taxi booking app for priority on your booking! Our App allows you to book a vehicle with us wherever and whenever without having to wait in a 'call waiting queue'. Enable push notifications for 'real time' updates on the status of your booking. 'Track' your vehicle progress at the touch of a button. Booking your taxi has never been easier, with just a few taps you can 'Book, Track & also Pay' via card. Select your map position or simply type in a street name or postcode to book your taxi.<br><br>
							<!-- <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i> -->
								<a href="https://itunes.apple.com/il/app/oakwell-rex/id670207342?mt=8" target="_blank">
					<img src="images/apple_42.png" alt=" " ></a>
                  <a href="https://play.google.com/store/apps/details?id=com.autocab.taxibooker.oakwellandrex.dewsbury&hl=en" target="_blank">
                    <img src="images/android_44.png" alt=" "></a>
								</p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- start show boot strap modal-->
<!-- <script>
$(document).ready(function(){
	$('#myModal').modal('show');
});
</script> -->

<!--  end start show boot strap modal -->
<!-- banner-bottom -->

<div class="banner-bottom" style="background-color:white;">
		<div class="container">
			<div class="col-md-8 w3l_banner_bottom_left wow fadeInLeftBig">
				<h3>OakwellRex Taxis</h3>
				<p>OakwellRex Taxis are proud to be the largest private hire firm in north Kirklees with 500 plus vehicles at your service. We strive on customer satisfaction and nothing makes us happier than fulfilling our customers needs.<br><br>
                    </p>
                    
			</div>
			<div class="col-md-4 w3l_banner_bottom_right wow fadeInRightBig">
				<img src="images/portpic1.jpg" alt=" " class="img-responsive img-rounded" />
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="banner-bottom" style="background-color:#f5f5f5">
		<div class="container">
        <div class="col-md-4 w3l_banner_bottom_right wow fadeInLeftBig">
        <br><br><br>
				<img src="images/111.jpg" alt=" " class="img-responsive" />
			</div>
			<div class="col-md-8 w3l_banner_bottom_left wow fadeInRightBig">
				<h3 style="display:inline;">Download our APP</h3><!--<h4 style="display:inline;">&nbsp;&nbsp;&nbsp;&nbsp;Book, Track, Pay</h4>-->
              
                
				<p>Download our Free Taxi booking app for priority on your booking! Our App allows you to book a vehicle with us wherever and whenever without having to wait in a 'call waiting queue'. Enable push notifications for 'real time' updates on the status of your booking. 'Track' your vehicle progress at the touch of a button.
Booking your taxi has never been easier, with just a few taps you can 'Book, Track & also Pay' via card. Select your map position or simply type in a street name or postcode to book your taxi.<br><br>
                    <a href="https://itunes.apple.com/il/app/oakwell-rex/id670207342?mt=8" target="_blank">
					<img src="images/apple_42.png" alt=" " ></a>
                  <a href="https://play.google.com/store/apps/details?id=com.autocab.taxibooker.oakwellandrex.dewsbury&hl=en" target="_blank">
                    <img src="images/android_44.png" alt=" "></a></p>
                    
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- two-grids -->
	<div class="two-grids" style="background-color:#FFF000">
		<div class="col-md-6 w3_two_grid_left wow fadeInDownBig"><br><br>
			<img src="images/99.jpg" alt=" " class="img-responsive" />
		</div>
		<div class="col-md-6 w3_two_grid_right">
			<h3 style="color:#491265">Our business Features</h3>
			<!-- <p class="w3layouts_dummy_para">Phasellus viverra et quam efficitur rhoncus sollicitudin.
				Etiam ultricies mauris et dapibus molestie.</p> -->
			<div class="w3_two_grid_right1 wow fadeInUpBig">
				<div class="col-xs-3 w3_two_grid_right_grid">
					<div class="w3_two_grid_right_grid1">
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" integrity="sha256-PF6MatZtiJ8/c9O9HQ8uSUXr++R9KBYu4gbNG5511WE=" crossorigin="anonymous" />
					<i class="fab fa-facebook-messenger"></i>
						<!-- <i class="fa fa-bolt" aria-hidden="true"></i> -->
					</div>
				</div>
				<div class="col-xs-9 w3_two_grid_right_gridr wow fadeInLeftBig">
					<h4 style="color:#491265">Facebook Messenger Instant Booking</h4>
					<p>Quick and instant car booking and dispatch in no time for customer facilitation.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3_two_grid_right1">
				<div class="col-xs-3 w3_two_grid_right_grid wow fadeInRightBig">
					<div class="w3_two_grid_right_grid1">
						<i class="fa fa-briefcase" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-xs-9 w3_two_grid_right_gridr wow fadeInLeftBig">
					<h4 style="color:#491265">Highly professional and friendly staff </h4>
					<p>Highly professional, trained and helpfull staff for your support.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
            <div class="w3_two_grid_right1 wow fadeInUpBig">
				<div class="col-xs-3 w3_two_grid_right_grid">
					<div class="w3_two_grid_right_grid1">
						<i class="fa fa-desktop" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-xs-9 w3_two_grid_right_gridr wow fadeInLeftBig">
					<h4 style="color:#491265">Latest and cutting edge technolgy</h4>
					<p>We ensure latest technology and cutting edge technology in order to facilitate customers .</p> 
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3_two_grid_right1 wow fadeInUpBig">
				<div class="col-xs-3 w3_two_grid_right_grid">
					<div class="w3_two_grid_right_grid1">
						<i class="fa fa fa-bolt" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-xs-9 w3_two_grid_right_gridr wow fadeInLeftBig">
					<h4 style="color:#491265">Fast & Instant Car Booking</h4>
					<p>Quick and instant car booking and dispatch in no time for customer facilitation.</p> 
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3_two_grid_right1">
				<div class="col-xs-3 w3_two_grid_right_grid wow fadeInRightBig">
					<div class="w3_two_grid_right_grid1">
						<i class="fa fa-car" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-xs-9 w3_two_grid_right_gridr wow fadeInLeftBig">
					<h4 style="color:#491265">latest and comfortable car fleet</h4>
					<p>Our car fleet is latest and comfortable as customer facilitation is our utmost priority .</p>
				</div>
				<div class="clearfix"> </div>
				
			</div>
			
			
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //two-grids -->
<!-- news -->
	<div class="news wow fadeInDownBig" style="background-color:white;">
		<div class="container">
			<h3 class="agile_head">OakwellRex Services</h3>
			<p class="w3_agile_para"></p>
			<div class="agileits_w3layouts_news_grids">
				<ul id="flexiselDemo1">	
					
				
				<li>
						<div class="agileits_w3layouts_news_grid">
							<div class="w3_agileits_news_grid">
								<img src="images/portpic4.jpg" alt=" " class="img-responsive" />
								<br>
								<div class="w3_agileits_news_grid_pos">
									<h4 style="color:#ffd751">Executive Cars</h4>
								</div>
							</div>
							<h5><a href="#" data-toggle="modal" data-target="#myModal">Executive Cars</a></h5>
							<p>Best executive cars for best customer facilitation.</p>
						</div>
					</li>
					<li>
						<div class="agileits_w3layouts_news_grid">
							<div class="w3_agileits_news_grid">
								<img src="images/portpic7.jpg" alt=" " class="img-responsive" />
								<br>
								<div class="w3_agileits_news_grid_pos">
									<h4 style="color:#ffd751">EcoGreen Cars</h4>
								</div>
							</div>
							<h5><a href="#" data-toggle="modal" data-target="#myModal">EcoGreen Cars</a></h5>
							<p>Looking for Luxury and comfort Elite cars are best options.</p>
						</div>
					</li>	
					<li>
						<div class="agileits_w3layouts_news_grid">
							<div class="w3_agileits_news_grid">
								<img src="images/portpic6.jpg" alt=" " class="img-responsive" />
								<br>
								<div class="w3_agileits_news_grid_pos">
									<h4 style="color:#ffd751">Wheelchair Van</h4>
								</div>
							</div>
							<h5><a href="#" data-toggle="modal" data-target="#myModal">Wheel Chair Van</a></h5>
							<p>Wheel chair vans for disable persons facilitation.</p>
						</div>
					</li>
					<li>
						<div class="agileits_w3layouts_news_grid">
							<div class="w3_agileits_news_grid">
								<img src="images/portpic2.jpg" alt=" " class="img-responsive" />
								<br>
								<div class="w3_agileits_news_grid_pos">
									<h4 style="color:#ffd751">Standard Cars</h4>
								</div>
							</div>
							<h5><a href="#" data-toggle="modal" data-target="#myModal">Standard Cars</a></h5>
							<p>Standard cars are great in demand with standard rates.</p>
						</div>
					</li>
					<li>
						<div class="agileits_w3layouts_news_grid">
							<div class="w3_agileits_news_grid">
								<img src="images/portpic9.jpg" alt=" " class="img-responsive" />
								<br>
								<div class="w3_agileits_news_grid_pos">
									<h4 style="color:#ffd751">Minibus</h4>
								</div>
							</div>
							<h5><a href="#" data-toggle="modal" data-target="#myModal">Minibus</a></h5>
							<p>If number 0f persons are more no worries mini bus is best  option.</p>
						</div>
					</li>
					<li>
						<div class="agileits_w3layouts_news_grid">
							<div class="w3_agileits_news_grid">
								<img src="images/portpic3.jpg" alt=" " class="img-responsive" />
								<br>
								<div class="w3_agileits_news_grid_pos">
									<h4 style="color:#ffd751">Elite Cars</h4>
								</div>
							</div>
							<h5><a href="#" data-toggle="modal" data-target="#myModal">Elite Cars</a></h5>
							<p>Looking for Luxury and comfort Elite cars are best options.</p>
						</div>
					</li>
					
				</ul>
				<script type="text/javascript">
						$(window).load(function() {
							$("#flexiselDemo1").flexisel({
								visibleItems: 4,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems:2
									},
									tablet: { 
										changePoint:768,
										visibleItems: 3
									}
								}
							});
							
						});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>
			</div>
		</div>
	</div>
<!-- //news -->
<!-- stats -->

	<div class="stats">
		<div class="wthree_stat wow fadeInRightBig">
			<div class="container">
				<div class="col-md-5 wthree_stat_left">
					<h3>Our Stats</h3>
					<p>Stats speak better then words.</p>
				</div>
				<div class="col-md-7 wthree_stat_right">
					<ul>
						<li>
							<div class="wthree_stat_right1">
								<i class="fa fa-mobile" aria-hidden="true"></i>
								<h4>App Customers<br>more then</h4>
								<p class="counter">30000</p> 
							</div>
						</li>
						<li>
							<div class="wthree_stat_right1">
								<i class="glyphicon glyphicon-thumbs-up	" aria-hidden="true"></i>
								<h4>Experince in years<br>more then</h4>
                               
								<p class="counter">50</p> 
							</div>
						</li>
						<li>
							<div class="wthree_stat_right1">
								<i class="fa fa-car" aria-hidden="true"></i>
								<h4>Cars in fleet<br>more then</h4>
                               
								<p class="counter">500</p> 
							</div>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="w3layouts_newsletter wow fadeInLeftBig">
			<div class="container">
				<div class="w3layouts_newsletter_left">
					<h3>Subscribe to our newsletter</h3>
				</div>
				<div class="w3layouts_newsletter_right">
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Email..." required="">
						<input type="submit" value="Subscribe">
					</form>
					
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
<!-- //stats -->
<!-- stats -->
	<script src="js/waypoints.min.js"></script> 
	<script src="js/counterup.min.js"></script> 
	<script>
		jQuery(document).ready(function( $ ) {
			$('.counter').counterUp({
				delay: 20,
				time: 1000
			});
		});
	</script>
<!-- stats -->
<!-- footer -->
	<div class="footer" style="background-color:white;">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-4 w3_footer_grid">
					<div class="w3_agile_logo wow fadeInLeftBig">
					<h2><a href="index.html"><span><i class="fa fa-taxi" aria-hidden="true"></i>
</span></a>&nbsp;OakwellRex <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taxis</h2>
				</div>
					<!-- <p>Moving Kirklees </p> -->
				</div>
				<div class="col-md-3 w3_footer_grid wow fadeInUpBig">
					<div class="w3l_footer_grid">
						<i class="fa fa-home" aria-hidden="true"></i>
					</div>
					<h4>Address</h4>
					<p> 2 Camroyd St, Dewsbury,<br> West Yorkshire, England UK.<br>WF13 1PG</p>
				</div>
				<div class="col-md-2 w3_footer_grid wow fadeInDownBig">
					<div class="w3l_footer_grid">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<h4>Call Us</h4>
					<p>+(44)-1924 471111
					<!-- <span>+(123) 456 780 344</span> -->
					</p>
				</div>
				<div class="col-md-3 w3_footer_grid wow fadeInUpBig">
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
				<li class="active"><a href="{{ url('/')}}">Home</a></li>
					<li><a href="{{ url('/services')}}">Services</a></li>
					<li><a href="{{ url('/about')}}">About</a></li>
					<li><a href="{{ url('/airport')}}">Airport Transfers</a></li>
					<li><a href="{{ url('/portfolio')}}">Portfolio</a></li>
					<li><a href="{{ url('/accounts')}}">Accounts</a></li>	
					<li><a href="{{ url('/contact')}}">Contact</a></li>
				</ul>
				<p>© 2019 All Rights Reserved <a href="https://play.google.com/store/apps/details?id=com.autocab.taxibooker.oakwellandrex.dewsbury&hl=en">OakwellRex Taxis</a></p>
			</div>
			<link href="css/font-awesome.css" rel="stylesheet"> 

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
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker({ dateFormat: 'dd-mm-yy' });
			
		});
	</script>
	<!-- //Calendar -->
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