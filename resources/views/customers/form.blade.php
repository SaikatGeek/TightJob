@csrf

				
				<div class="form-group ">
					<label for="name">Name</label>
					<input type="text" name="name" value="{{ old('name') ?? $customer->name }}" class="form-control">		{{ $errors->first('name') }}
				</div>

				<div class="form-group">
					<label for="Email">Email</label>
					<input type="email" name="email" value="{{ old('email') ?? $customer->email }}" class="form-control">		 {{ $errors->first('email') }}
				</div>

				<div class="form-group">
					<label  for="active">Status</label>
					<select id="active" name="status" class="form-control">
						<option disabled value="">Select Customer status</option>

						@foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)

						<option value="{{$activeOptionKey}}" {{ $customer->status == $activeOptionValue ? 'selected' : ''  }}>	{{ $activeOptionValue }}
						</option>


						@endforeach


						
						
					</select>
				</div>


				<div class="form-group">
					<label  for="company_id">Company</label>
					<select id="company_id" name="company_id" class="form-control">
						@foreach ($companies as $company)
							<option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected' : '' }}>{{ $company->name }}</option>
						@endforeach
						 
					</select>
				</div>

				<button type="submit" class="btn btn-primary my-3">Add Customer</button>
