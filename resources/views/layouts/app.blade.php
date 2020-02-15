<!DOCTYPE html>
<html>
<head>
<title>CONDITION FC</title>
<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script>src="js/toTopButton.js"</script>
<script>src="js/smoothScrolling.js"</script>
<script>src="js/slider.js"</script>
<script src="js/responsiveslides.min.js"></script>
<!-- Custom Theme files -->
<link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
<!--theme-style-->
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="https://js.stripe.com/v3/"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">




 <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider2").responsiveSlides({
        auto: true,
        pager: true,
        speed: 300,
        namespace: "callbacks",
      });
    });
  </script>

  
</head>
<body> 

	@if(Session::has('flash_message'))
		<div class="alert alert-success alert-dismissible">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>{!! session('flash_message') !!}</strong>
		</div>
		@endif

		@if(Session::has('flash_danger'))
		<div class="alert alert-danger alert-dismissible">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>{!! session('flash_danger') !!}</strong>
		</div>
		@endif
	@if (!Auth::guest() && Auth::user()->email == '')
		<div class ='well'>
		<h1>{{ 'Dear '.Auth::user()->name.' your email is not verified' }}</h1>
		<h2>First verify your email then continue.</h2>
		{{Auth::logout()}}
		<h2>You have been logged out . Refresh Current Page</h2>
		</div>
		
		
		
	@else
	

		<!--header-->
	<div class="header" id="head">
		<div class="header-top">
			<div class="container">
			<p class="header-para"></p>
			<ul class="sign">
			@if (Auth::guest())
				<li ><a href="admin" >Admin</a></li>
				<li><a href="#" ><span > </span></a></li>
				<li ><a href="login" >Log In</a></li>
				<li><a href="#" ><span > </span></a></li>
				<li ><a href="register" >Sign Up</a></li>
			@else	
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
					{{ Auth::user()->name }} 
				</a>

				<ul class="dropdown-menu" role="menu">
					<li><a href="/dashboardd">Dashboard</a></li>
					<li><a href="/profile/{{Auth::user()->id}}/edit">Your Profile</a></li>
					<li>
						<a href="{{ route('logout') }}"
							onclick="event.preventDefault();
									  document.getElementById('logout-form').submit();">
							Logout
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
					</li>
				</ul>
			</li>	
			@endif		
				</ul>
			</div>
			<div class="clearfix"> </div>
	</div>
                

	<div class="header-bottom-top">
		<div class="container">
			<div class="clearfix"> </div>
			<div class="header-bottom">			
				<div class="logo">
					<a href="home"><img src="{{ URL::asset('images/LOGO.png') }}" alt=" " /></a>
				</div>
				<h1 style="color:#D66853; padding-top : 40px; padding-left : 40px;" > CONDITION FC</h1>
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
						<li class="active" ><a href="/home" class="scroll">Home</a></li>
						<li><a href="/news" class="scroll">News</a></li>
						<li><a href="/leagues" class="scroll">Leagues</a></li>
						
						<li><a href="/teams" class="scroll">Team</a></li>
						<li><a href="/matches" class="scroll">Matches</a></li>
						<li><a href="/contact" class="scroll">Contact</a></li>
					</ul>
					<!--script-->
					<script>
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(500, function(){
							});
						});
					</script>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		</div>
	</div>
		 
		
		
			@yield('content')
	
			
			<a href="#head" class="back-to-top" style="display: inline; " >
 
				<i class="fa fa-arrow-circle-up"></i>
				 
				</a>	
		</body>
		
		</html>
		
	@endif


