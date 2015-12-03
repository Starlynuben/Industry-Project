@extends('templates.main')  
       
@section('content') 
<body class="galleryBody">
		
	<div class="galleria">
		@foreach($gallery as $photo)
	    <img src="{{asset('images/'.$photo->photoName)}}">
	    @endforeach
	</div>	

	@if(Auth::check())

	<div class="newPhotoForm">

		{!! Form::open(array('url' => 'gallery', 'class'=>'pure-form pure-form-stacked', 'files'=>true)) !!}
			
				<div class="">
				{!! Form::label('photo', 'Upload a Photo');!!}
				{!! Form::file('photo') !!}
				{!! $errors->first('photo','<p class="error">:message<p>')!!}
				</div>
				<br>
				<input class="pure-button pure-button-primary" type="submit" value="Post">
		
		{!! Form::close() !!}

	@endif
	
	</div>
</body>

@stop