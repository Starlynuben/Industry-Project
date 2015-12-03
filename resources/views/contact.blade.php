@extends('templates.main')


@section('content')
<body>

	<main>

		<h1 class="pageTitle">Contact</h1>
		<div>
			<div class="contactInformation">
				
				@if(Auth::check())
				<div class="contactDirections" data-url="{{url('contents/2')}}">{!! \App\Content::find(2)->content !!}</div>

				<div class="contactLinks" data-url="{{url('contents/1')}}">{!! \App\Content::find(1)->content !!}</div>
				@else
				<div class="contactDirections">{!! \App\Content::find(2)->content !!}</div>

				<div class="contactLinks">{!! \App\Content::find(1)->content !!}</div>
				@endif

				<p class="contactLinks">
					
					<br><br>
					<a href="http://www.thegoodguysgroup.co.nz/">The Good Guys Group</a>
					<br><br>
					<a href="http://www.homezone.org.nz">Home Zone Catalogue Company</a>
					<br><br>
					<a href="http://www.christmascatalogue.co.nz">The Christmas Catalogue Company</a>
				</p>

			</div>
			


			<div class="contactForm"> 

			 <p class="contactTitle">Please contact us here</p>

				{!!  Form::open(array('url' => 'contact', 'class'=>'pure-form pure-form-stacked')) !!}
				

						{!! Form::label('name', 'Name', array('class' => 'formwidth'));!!}
						{!! Form::text('name') !!}
						{!! $errors->first('name','<p class="error">:message<p>')!!}

						{!! Form::label('phone', 'Phone Number');!!}
						{!! Form::text('phone') !!}
						{!! $errors->first('phone','<p class="error">:message<p>')!!}

						{!! Form::label('mobile', 'Mobile Number');!!}
						{!! Form::text('mobile') !!}
						{!! $errors->first('mobile','<p class="error">:message<p>')!!}

						{!! Form::label('email', 'Email');!!}
						{!! Form::email('email') !!}
						{!! $errors->first('email','<p class="error">:message<p>')!!}

						{!! Form::label('message', 'Message');!!}
						{!! Form::textarea('content') !!}
						{!! $errors->first('content','<p class="error">:message<p>')!!}
						
						<br>

						<input type="submit" class="pure-button pure-button-primary"  value="Contact Us">
					
				{!! Form::close() !!}

			</div>
		</div>

	</main>
</body>

@stop
