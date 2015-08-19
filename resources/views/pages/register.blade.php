@extends('layouts.master')

@section('content')

@inject('countries', 'App\Services\Countries')

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h2 class="text-center">Signup for a new account</h2>
				{!! Form::open() !!}
				{!! Form::hidden('type', 'freelancer') !!}
				<div class="form-group">
					{!! Form::label('email') !!}
					{!! Form::email('email', null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							{!! Form::label('password') !!}
							{!! Form::password('password', ['class' => 'form-control']) !!}
						</div>

						<div class="col-md-6">
							{!! Form::label('password_confirmation') !!}
							{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							{!! Form::label('firstName', 'First Name') !!}
							{!! Form::text('firstName', null, ['class' => 'form-control']) !!}
						</div>
						<div class="col-md-6">
							{!! Form::label('lastName', 'Last Name') !!}
							{!! Form::text('lastName', null, ['class' => 'form-control']) !!}
						</div>
					</div>
				</div>

				<div class="form-group">
					{!! Form::label('country') !!}
					{!! Form::select('country', $countries->all(), null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('phoneNumber', 'Phone Number') !!}
					{!! Form::text('phoneNumber', null, ['class' => 'form-control']) !!}
				</div>
				
				<hr />			

				<div class="checkbox">
					<label>
						{!! Form::checkbox('terms', 1, 0) !!} I have read and understood the <a href="#">Terms & Conditions</a>.
					</label>
				</div>

				<div class="form-group">
					<p class="text-muted">We take your privacy very seriously and we do not use, sell or share your personal information for any reason at all, EVER!</p>
				</div>

				

				<div class="form-group">
					<div class="row">
						<div class="col-md-4 float-right">
							{!! Form::submit('Sign up',['class' => 'btn btn-success btn-lg btn-block']) !!}
						</div>	
					</div>
				</div>

				@include('partials.errors')			

				{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection