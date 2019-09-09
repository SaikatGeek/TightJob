@extends('layouts.app')

@section('content')

	<div class="row py-3">
		<div class="col-12 ">
			<h1>Edit Details for {{ $customer->name }}</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<form action="/customers/{{ $customer->id }}" method="post" class="pb-5">

				@method('PATCH')
				@include('customers.form')

			</form>
		</div>
	</div>
	
	<hr>

	
	

@endsection