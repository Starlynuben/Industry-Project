@extends('templates.main')


@section('content')
<body>
	<main>
		Please contact us here

		<div>
			
			{!!  Form::open(array('url' => 'emails')) !!}
				<fieldset>
					{!! Form::Label('name', 'Name');!!}
					{!! Form::text('name') !!}

					{!! Form::Label('phone', 'Phone Number');!!}
					{!! Form::text('phone') !!}

					{!! Form::Label('mobile', 'Mobile Number');!!}
					{!! Form::text('mobile') !!}

					{!! Form::Label('email', 'Email');!!}
					{!! Form::text('email') !!}

					{!! Form::Label('message', 'Message');!!}
					{!! Form::text('message') !!}

					<input type="submit" value="Contact Us">
				</fieldset>
			{!! Form::close() !!}
		</div>

	</main>
</body>

@stop
