@extends('templates.main')  
       
@section('content') 
<body>
	<main>
	
		<h1 class="pageTitle">Terms and Conditions</h1>
		
		<div class="textContainer">

			<h2 class="subTitle">THE GOOD GUYS LTD TERMS & CONDITIONS</h2>
		
			@if(Auth::check())
			<p class="termsText" data-url="{{url('contents/6')}}">{!! \App\Content::find(6)->content !!}</p>
			<h2 class="subTitle" data-url="{{url('contents/7')}}">{!! \App\Content::find(7)->content !!}</h2>
			<p class="termsText" data-url="{{url('contents/8')}}">{!! \App\Content::find(8)->content !!}</p>
			<h2 class="subTitle" data-url="{{url('contents/9')}}">{!! \App\Content::find(9)->content !!}</h2>
			<p class="termsText termsBottom" data-url="{{url('contents/10')}}">{!! \App\Content::find(10)->content !!}</p>

			@else
			<p class="termsText">{!! \App\Content::find(6)->content !!}</p>
			<h2 class="subTitle">{!! \App\Content::find(7)->content !!}</h2>
			<p class="termsText">{!! \App\Content::find(8)->content !!}</p>
			<h2 class="subTitle">{!! \App\Content::find(9)->content !!}</h2>
			<p class="termsText termsBottom">{!! \App\Content::find(10)->content !!}</p>

			@endif		

		</div>

	</main>
</body>

@stop