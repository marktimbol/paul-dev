@extends('layouts.master')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col m6 offset-m3">
				<h2 class="text-center">Log in to your Account</h2>

				<div class="row">
					{!! Form::open() !!}
					<div class="input-field col s12 m12">
						{!! Form::email('email', null, ['class' => 'validate']) !!}
						{!! Form::label('email') !!}
					</div>

					<div class="input-field col s12 m12">
						{!! Form::password('password', ['class' => 'validate']) !!}
						{!! Form::label('password') !!}
					</div>

				
					<div class="col s12 m12">
						{!! Form::checkbox('remember', 1, 0, ['id' => 'filled-in-box', 'class' => 'filled-in']) !!}
						{!! Form::label('filled-in-box', 'Remember Me') !!}
					</div>
					
					<div class="divider"></div>

					<div class="input-field col s12 m4 right right-align">
						<button type="submit" name="submit" class="btn waves-effect waves-light btn-large btn-block">Login</button>
					</div>
				</div>

				@include('partials.errors')			

				{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection