@extends('templates.main')


@section('content')
<body>

	<main>

		<h1 class="pageTitle">Contact</h1>
		<div>
			<div class="contactInformation">
				
				<p class="contactDirections">
					59 Rangi Road, <br>
					Takanini, Auckland <br>
					<br>
					Ph: (64-9) 269 0446 <br>
					Fax: (64-9) 269 0447 <br>
				</p>

				<p class="contactLinks">
					We do not sell household and electrical appliances. 
					However for our separate businesses selling household and electrical appliances click here. 
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

						{!! Form::label('phone', 'Phone Number');!!}
						{!! Form::text('phone') !!}

						{!! Form::label('mobile', 'Mobile Number');!!}
						{!! Form::text('mobile') !!}

						{!! Form::label('email', 'Email');!!}
						{!! Form::email('email') !!}

						{!! Form::label('message', 'Message');!!}
						{!! Form::textarea('content') !!}
						
						<br>

						<input type="submit" class="pure-button pure-button-primary"  value="Contact Us">
					
				{!! Form::close() !!}

			</div>
		</div>

	</main>
</body>

@stop
