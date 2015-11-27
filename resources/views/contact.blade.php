@extends('templates.main')


@section('content')
<body>
	<main>

		<div class="contactForm"> 

		 <p class="contactTitle">Please contact us here</p>

			{!!  Form::open(array('url' => 'contact', 'class'=>'pure-form pure-form-stacked')) !!}
			

					{!! Form::label('name', 'Name', array('class' => 'formwidth'));!!}
					{!! Form::text('name') !!}

					{!! Form::label('phone', 'Phone Number');!!}
					{!! Form::text('phone') !!}

					{!! Form::label('mobile', 'Mobile Number');!!}
					{!! Form::text('mobile') !!}

					{!! Form::label('email', 'Email');!!}
					{!! Form::text('email') !!}

					{!! Form::label('message', 'Message');!!}
					{!! Form::text('message') !!}
					
					<br>

					<input type="submit" class="pure-button pure-button-primary"  value="Contact Us">
				
			{!! Form::close() !!}

		</div>

	</main>
</body>

@stop
