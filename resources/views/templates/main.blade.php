<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Good Guys</title>
	<link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<header>
	<div id="headerContainer">
		<div id="number"><p class="headerNumber">0800 448 988</p></div>
		<div id="email"><p class="headerNumber">thegoodguys@biz.co.nz</p></div>
	</div>
	<div id="logo"></div>

	<div>
		<nav>
			<ul>
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

<footer></footer>
</html>