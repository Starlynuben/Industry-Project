@extends('templates.main')  
       
@section('content') 
<body>
	

	<main>
	
	<h1 class="pageTitle">FAQ</h1>
	<div class="faqContainer">

		@foreach($faqs as $faq)

		<div class="faqCellContainer">
			<div class="questionContainer"><p><span class="questionSpan">Q:</span>{{$faq->question}}</p></div>
			<div class="questionContainer"><p><span class="questionSpan">A:</span>{{$faq->answer}}</p></div>
		</div>

		@endforeach
		
	</div>

	</main>
</body>

@stop

