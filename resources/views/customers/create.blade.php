@extends('layouts.app')

@section('content')

	<div class="row py-3">
		<div class="col-12 ">
			<h1>Add new customer</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<form action="{{ route('customers.store') }}" method="post" class="pb-5">
				@csrf

				
				<div class="form-group ">
					<label for="name">Name</label>
					<input type="text" name="name" value="{{ old('name') }}" class="form-control">		{{ $errors->first('name') }}
				</div>

				<div class="form-group">
					<label for="Email">Email</label>
					<input type="email" name="email" value="{{ old('email') }}" class="form-control">		 {{ $errors->first('email') }}
				</div>

				<div class="form-group">
					<label  for="active">Status</label>
					<select id="active" name="status" class="form-control">
						<option disabled value="">Select Customer status</option>
						<option value="1">Active</option>
						<option value="0">Inactive</option>
					</select>
				</div>


				<div class="form-group">
					<label  for="company_id">Company</label>
					<select id="company_id" name="company_id" class="form-control">
						@foreach ($companies as $company)
							<option value="{{ $company->id }}">{{ $company->name }}</option>
						@endforeach
						
						
					</select>
				</div>

				<button type="submit" class="btn btn-primary my-3">Add Customer</button>

			</form>
		</div>
	</div>
	
	<hr>

	
	

@endsection