@extends('layouts.master')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h2 class="text-center">Log in to your Account</h2>
				{!! Form::open() !!}
				<div class="form-group">
					{!! Form::label('email') !!}
					{!! Form::email('email', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('password') !!}
					{!! Form::password('password', ['class' => 'form-control']) !!}
				</div>

				<div class="checkbox">
					<label>
						{!! Form::checkbox('remember', 1, 0, []) !!} Remember me
					</label>
				</div>	
				<hr />

				<div class="form-group">
					<div class="row">
						<div class="col-md-4 float-right">
							{!! Form::submit('Log in',['class' => 'btn btn-success btn-lg btn-block']) !!}
						</div>	
					</div>
				</div>



				@include('partials.errors')			

				{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection