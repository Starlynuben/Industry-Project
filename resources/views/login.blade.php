@extends('templates.main')  
       
@section('content') 
<body>
		
	<div class="pageTitle">Login</div>

    <div class="loginForm">  

	    {!! Form::open(['url' => 'processLogin', 'class'=>'pure-form pure-form-stacked']) !!}
	        
	        {!! Form::label('username', 'Username');!!}
	        {!! Form::text('username') !!}

	        {!! Form::label('password', 'Password');!!}
	        {!! Form::password('password') !!}
	
	        <input class="pure-button pure-button-primary" type="submit" value="Login">
	       
	    {!! Form::close() !!}
		<br>
	    {{Session::get("message")}}

    </div>

</body>

@stop