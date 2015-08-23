<div class="row">
	<div class="input-field col s12 m12">
		{!! Form::text('title', null, ['class' => 'validate']) !!}
		{!! Form::label('title') !!}
	</div>
	<div class="input-field col s12 m12">
		{!! Form::select('years_of_experience', $skills->yearsOfExperience(), null, ['class' => '']) !!}
		{!! Form::label('years_of_experience', 'Years of Experience') !!}
	</div>	

	<div class="input-field col s12 m12">
		{!! Form::textarea('description', null, ['class' => 'validate materialize-textarea']) !!}
		{!! Form::label('description') !!}
	</div>	
</div>