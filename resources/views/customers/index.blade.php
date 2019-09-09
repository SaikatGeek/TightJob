@extends('layouts.app')

@section('content')


	<div class="row py-3">
		<div class="col-12 ">
			<h1>Customer List</h1>
			<p><a href="customers/create">Add New Customer</a></p>
		</div>
	</div>


	@foreach($customers as $customer)
		<div class="row">
			
			<div class="col-2">
				{{ $customer->id }}
			</div>

			<div class="col-4">
				<a href="/customers/{{ $customer->id }}">{{ $customer->name }}</a>
			</div>

			<div class="col-4">
				{{ $customer->company->name }}
			</div>

			<div class= "col-2" >
				{{ $customer->status }}
			</div>

		</div>
	@endforeach





	<div class="row">
		<div class="col-6">
			
			@foreach($companies as $company)
				
					<h3>{{ $company->name }}</h3>
				<ul>
					@foreach($company->customers as $customer)
						<li> {{ $customer->name }} </li>
					@endforeach
				</ul>
			@endforeach
		</div>		
	</div>

	

@endsection