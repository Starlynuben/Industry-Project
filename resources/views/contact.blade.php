@extends('templates.main')


@section('content')
<body>
	<main>

		 <h2>Please contact us here</h2>

			{!!  Form::open(array('url' => 'contact')) !!}
				<fieldset class="contactEmailForm">
					{!! Form::label('name', 'Name');!!}
					{!! Form::text('name') !!}

					{!! Form::label('phone', 'Phone Number');!!}
					{!! Form::text('phone') !!}

					{!! Form::label('mobile', 'Mobile Number');!!}
					{!! Form::text('mobile') !!}

					{!! Form::label('email', 'Email');!!}
					{!! Form::text('email') !!}

					{!! Form::label('message', 'Message');!!}
					{!! Form::text('message') !!}

					<input type="submit" value="Contact Us">
				</fieldset>
			{!! Form::close() !!}

	</main>
</body>

@stop
