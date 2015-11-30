<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Good Guys</title>
	<link rel="stylesheet" href="{{asset('css/styles.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	
</head>

<div class="container">
	
	<header>

		<div id="bars"><i class="fa fa-bars"></i></div>

		<div id="headerContainer">
			<div id="number"><p class="headerNumber">0800 448 988</p></div>
			<div id="email"><p class="headerNumber">thegoodguys@biz.co.nz</p></div>
		</div>
		<div id="logo"><p class="companyName">The Good Guys</p></div>

		<div>
			<nav>
				<ul id="nav">
					<li><a href="{{url('home')}}">Home</a></li>
					<li><a href="{{url('gallery')}}">Photos</a></li>
					<li><a href="{{url('employment')}}">Employment Vacancies</a></li>
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
	<footer><div class="footerInfo">2015 Copyright The Good Guys Ltd.  All Rights Reserved <a href="{{url('terms')}}">Terms and Conditions</a></div></footer>



<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/jquery.slides.min.js')}}"></script>

</html>