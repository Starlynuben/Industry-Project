@extends('templates.main')  
       
@section('content') 
<body>
	<main>

		<h1 class="pageTitle">Territory Manager - Auckland - Direct Sales</h1>
	
		<div class="textContainer">
			
			<p class="jobText">

			<strong>The Good Guys</strong> is a <strong>one stop shop</strong>, providing quality men's, women's and children's clothing, Manchester, footwear, toys, accessories, toiletries, furniture & household goods to our customers door, from our very own purpose built trucks, set up as mobile shops.
			<br><br><br>

			We're seeking a Territory Manager who is smart, balanced and organised, who loves meeting people & enjoys closing sales! 
			<br><br>

			We are a solid 26 year old direct to market company and our aim is to provide levels of service and product that make our customers go WOW!
			<br><br>

			We want a self-motivated sales professional who would like the opportunity to:<br>
			- Be part of a 30 strong national sales team <br>
			- Service a large existing client base <br>
			- Grow an existing territory <br>
			- Be supported by highly professional Customer Service & Administration team <br>
			- Receive on-going training and support <br>
			- Be part of a fun achieving culture<br>
			 <br><br>

			We pay a reasonable retainer and offer a generous commission & bonus structure that has targets which can be easily reached. You'll also get a sales vehicle, fuel card and cell phone.
			<br><br>

			You will need:<br>
			- To be motivated to earn a great income <br>
			- Full Class 1 Licence (Class 2 is an advantage and will be required) <br>
			- Ability to relate and resell to our existing customers <br>
			- To be organised! <br>
			<br><br>
			Applicants for this position will have NZ residency or a valid NZ work permit. The challenge of getting on top of this role will give huge satisfaction (and $$$'s) to the right person! 
			<br><br>
			If you believe you are worthy of joining our great company, send me your CV today!
			<br><br>
			For more information about The Good Guys Group, check out our website www.thegoodguysgroup.co.nz 

			</p>
			<br><br><br>

			<div class="contactForm"> 

			 <p class="contactTitle">Applying For This Job</p>

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
						{!! Form::textarea('message') !!}
						
						<br>

						<input type="submit" class="pure-button pure-button-primary"  value="Contact Us">
					
				{!! Form::close() !!}

			</div>

		</div>

	</main>
</body>

@stop