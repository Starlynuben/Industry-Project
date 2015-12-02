@extends('templates.main')  
       
@section('content') 



<div id="slides">
    <img src="http://placehold.it/940x300">
    <img src="http://placehold.it/940x300">
    <img src="http://placehold.it/940x300">
    <img src="http://placehold.it/940x300">
    <img src="http://placehold.it/940x300">
  </div>
<body>

	@if(Auth::check())
	<div class="companyMessage" data-url="{{url('contents/3')}}">{!! \App\Content::find(3)->content !!}</div>
	@else
	<div class="companyMessage">{!! \App\Content::find(3)->content !!}</div>
	@endif
	<main>


		<div class="boxHolder">
			@if(Auth::check())
			<div class="infoBox1" data-url="{{url('contents/4')}}">{!! \App\Content::find(4)->content !!}</div>

			<div class="infoBox1 infoBox2" data-url="{{url('contents/5')}}">{!! \App\Content::find(5)->content !!}</div>
			@else	
			<div class="infoBox1">{!! \App\Content::find(4)->content !!}</div>

			<div class="infoBox1 infoBox2">{!! \App\Content::find(5)->content !!}</div>
			@endif

		</div>

	</main>
</body>

@stop

