@inject('education', 'App\Services\Education')

<div class="row">	
	<div class="input-field col s12 m12">
		{!! Form::label('degree') !!}
		{!! Form::select('degree', $education->degree(), null, ['class' => 'validate']) !!}
	</div>
	<div class="input-field col s12 m12">
		{!! Form::label('specialization') !!}
		{!! Form::text('specialization', null, ['class' => 'validate']) !!}
	</div>
	<div class="input-field col s12 m12">
		{!! Form::label('institute') !!}
		{!! Form::text('institute', null, ['class' => 'validate']) !!}
	</div>				

	<div class="input-field col s12 m12">
		{!! Form::label('yearOfCompletion', 'Year of Completion') !!}
		{!! Form::text('yearOfCompletion', null, ['class' => 'validate']) !!}
	</div>			
</div>