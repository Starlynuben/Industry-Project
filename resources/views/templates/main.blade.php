<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Good Guys</title>
	<link rel="stylesheet" href="{{asset('css/styles.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<!-- fonts -->
	<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>

<div class="container">
	
	<header>

		<div id="headerContainer">
			<div id="number"><p class="headerInfo">0800 448 988</p></div>
			<div id="email"><p class="headerInfo">thegoodguys@biz.co.nz</p></div>
		</div>

		<div id="logo"><a href="{{url('home')}}"><img src="{{asset('images/logo.jpg')}}" alt=""></a></div>

		<div>
			<nav>
				<ul id="nav">
					<li><a href="{{url('home')}}">Home</a></li>
					<li><a href="{{url('gallery')}}">Photos</a></li>
					<li><a href="{{url('employment')}}">Employment</a></li>
					<li><a href="{{url('contact')}}">Contact</a></li>
					<li><a href="{{url('faq')}}">FAQ</a></li>
				</ul>
			</nav>
		</div>

		<div>
			
		</div>
	</header>

	<body>

	@yield('content')

	</body>
	
</div>

<footer>
	<div class="footerLinks">
		<a href="{{url('terms')}}">Terms and Conditions</a> | 
		@if(Auth::check())
			<a href="{{url('logout')}}">Logout</a>
		@else
			<a href="{{url('login')}}">Login</a>
		@endif
	</div>

	<div class="footerInfo">2015 Copyright The Good Guys Ltd.  All Rights Reserved</div>
</footer>

<div id="token" style="display:none;">{{ csrf_token() }}</div>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="../galleria/galleria-1.4.2.min.js"></script>
<script src="{{asset('js/jquery.slides.min.js')}}"></script>
<script src="{{asset('js/jeditable.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>




</html>