@if (Session::has('success'))
	
	<div class="col-md-6 col-md-offset-2 alert alert-success" role="alert" dir="rtl">
		<strong>Success:</strong> {{ Session::get('success') }}
	</div>

@endif

@if (count($errors) > 0)

	<div class="col-md-6 col-md-offset-2 alert alert-danger" role="alert" style="direction: rtl;">
		<strong>الاخطاء:</strong>
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach  
		</ul>
	</div>

@endif