<div class="row">
	<div class="input-field col s12 m12">
		{!! Form::label('companyName', 'Company Name') !!}
		{!! Form::text('companyName', null, ['class' => 'validate']) !!}
	</div>
	<div class="input-field col s12 m12">
		{!! Form::label('website') !!}
		{!! Form::text('website', null, ['class' => 'validate']) !!}
	</div>
	<div class="input-field col s12 m12">
		{!! Form::label('startDate') !!}
		<input type="date" name="startDate" id="startDate" class="datepicker" data-value="{{ old('startDate') }}" />
	</div>				

	<div class="input-field col s12 m12">
		{!! Form::label('endDate') !!}
		<input type="date" name="endDate" id="endDate" class="datepicker"  data-value="{{ old('endDate') }}" />
	</div>				

	<div class="input-field col s12 m12">
		{!! Form::label('description') !!}
		{!! Form::textarea('description', null, ['class' => 'validate materialize-textarea']) !!}
	</div>	

	<div class="col s12 m12">
		{!! Form::checkbox('isPresent', 1, 0, ['id' => 'filled-in-box', 'class' => 'filled-in']) !!}
		{!! Form::label('filled-in-box', 'Are you currently working here?') !!}
	</div>							
</div>