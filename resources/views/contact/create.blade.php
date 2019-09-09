@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<h5>This is contact page</h5>

@if(!session('message'))
<form action="/contact" method="post" >
	@csrf
	<div class="form-group ">
		<label for="name">Name</label>
		<input type="text" name="name" value="{{ old('name')  }}" class="form-control">		
		<div>{{ $errors->first('name') }}</div>
	</div>

	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" name="email" value="{{ old('email') }}" class="form-control">		 
		<div>{{ $errors->first('email') }}</div>
	</div>

	<div class="form-group">
		<label for="message">Message</label>
		<textarea name="message" id="message" cols="30" rows="10" class="form-control">
			
			{{ old('message') }}
		</textarea>

		<div>{{ $errors->first('message') }}</div>

	</div>

	<button type="submit" class="btn-primary btn">Send Message</button>


</form>

@endif

@endsection