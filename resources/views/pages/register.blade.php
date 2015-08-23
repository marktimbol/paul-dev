@extends('layouts.master')

@section('content')

@inject('countries', 'App\Services\Countries')

	<div class="container">
		<div class="row">
			<div class="col s12 m6 offset-m3">
				
				<h2>Signup for a new account</h2>

				{!! Form::open() !!}

					{!! Form::hidden('type', 'freelancer') !!}

					<div class="row">

						<div class="input-field col s12 m12">
							{!! Form::label('email') !!}
							{!! Form::email('email', null, ['class' => 'validate']) !!}
						</div>
					
						<div class="input-field col s12 m12">
							<div class="row">
								<div class="input-field col s12 m6">
									{!! Form::password('password', ['class' => 'validate']) !!}
									{!! Form::label('password') !!}
								</div>

								<div class="input-field col s12 m6">
									{!! Form::password('password_confirmation', ['class' => 'validate']) !!}
									{!! Form::label('password_confirmation') !!}
								</div>
							</div>
						</div>

						<div class="input-field col s12 m12">
							<div class="row">
								<div class="input-field col s12 m6">
									{!! Form::label('firstName', 'First Name') !!}
									{!! Form::text('firstName', null, ['class' => 'validate']) !!}
								</div>
								<div class="input-field col s12 m6">
									{!! Form::label('lastName', 'Last Name') !!}
									{!! Form::text('lastName', null, ['class' => 'validate']) !!}
								</div>
							</div>
						</div>

						<div class="input-field col s12 m12">
							
							{!! Form::select('country', $countries->all(), null, ['class' => 'browser-default']) !!}
							{!! Form::label('country') !!}
						</div>

						<div class="input-field col s12 m12">
							{!! Form::label('phoneNumber', 'Phone Number') !!}
							{!! Form::text('phoneNumber', null, ['class' => 'validate']) !!}
						</div>
							

						<div class="col s12 m12">
							{!! Form::checkbox('terms', 1, 0, ['id' => 'filled-in-box', 'class' => 'filled-in']) !!}
							<label for="filled-in-box">I have read and understood the <a href="#">Terms & Conditions</a>.</label>
							
						</div>

						<div class="input-field col s12 m12">
							<p class="text-muted">We take your privacy very seriously and we do not use, sell or share your personal information for any reason at all, EVER!</p>
						</div>

						
						<div class="input-field col s12 m12">
							<div class="row">
								<div class="col s12 m4 right">
									<button type="submit" name="submit" class="btn waves-effect waves-light btn-large">Sign up</button>
								</div>	
							</div>
						</div>

						@include('partials.errors')	
					</div>		

				{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection