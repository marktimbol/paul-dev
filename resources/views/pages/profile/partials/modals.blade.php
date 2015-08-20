@inject('education', 'App\Services\Education')

<div class="modal modal-fixed-footer" id="AddSkillModal">
	{!! Form::open(['route' => 'profile.skills.store']) !!}
		<div class="modal-content">
			<h4>Add your Skills</h4>
			<div class="row">
				<div class="input-field col s12 m12">
					{!! Form::text('title', null, ['class' => 'validate']) !!}
					{!! Form::label('title') !!}
				</div>
				<div class="input-field col s12 m12">
					{!! Form::select('years_of_experience', $skills->yearsOfExperience(), null, []) !!}
					{!! Form::label('years_of_experience', 'Years of Experience') !!}
				</div>	

				<div class="input-field col s12 m12">
					{!! Form::textarea('description', null, ['class' => 'validate materialize-textarea']) !!}
					{!! Form::label('description') !!}
				</div>	
			</div>
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn waves-effect waves-green">Add Skill</button>
		</div>
	{!! Form::close() !!}
</div>

<div class="modal modal-fixed-footer" id="AddExperienceModal">
	{!! Form::open(['route' => 'profile.work-experiences.store']) !!}
		<div class="modal-content">
			<h4>Add your Experience</h4>
			<div class="row">
				<div class="input-field col s12 m12">
					{!! Form::label('companyName') !!}
					{!! Form::text('companyName', null, ['class' => 'validate']) !!}
				</div>
				<div class="input-field col s12 m12">
					{!! Form::label('website') !!}
					{!! Form::text('website', null, ['class' => 'validate']) !!}
				</div>
				<div class="input-field col s12 m12">
					{!! Form::label('startDate') !!}
					<input type="date" name="startDate" id="startDate" class="datepicker" />
				</div>				

				<div class="input-field col s12 m12">
					{!! Form::label('endDate') !!}
					<input type="date" name="endDate" id="endDate" class="datepicker" />
				</div>				

				<div class="input-field col s12 m12">
					{!! Form::label('description') !!}
					{!! Form::textarea('description', null, ['class' => 'validate materialize-textarea']) !!}
				</div>	

				<div class="input-field col s12 m12">
					{!! Form::checkbox('isPresent', 1, 0, ['id' => 'filled-in-box', 'class' => 'filled-in']) !!}
					{!! Form::label('filled-in-box', 'Are you currently working here?') !!}
				</div>							
			</div>
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn waves-effect waves-green">Add Experience</button>
		</div>
	{!! Form::close() !!}
</div>



<div class="modal fade" id="AddExperienceModal" tabindex="-1" role="dialog" aria-labelledby="addYourExperience">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="addYourExperience">Add your Experience</h4>
			</div>

			{!! Form::open(['route' => 'profile.work-experiences.store']) !!}
				<div class="modal-body">
					<div class="input-field col m12">
						{!! Form::label('companyName') !!}
						{!! Form::text('companyName', null, ['class' => 'validate']) !!}
					</div>
					<div class="input-field col m12">
						{!! Form::label('website') !!}
						{!! Form::text('website', null, ['class' => 'validate']) !!}
					</div>
					<div class="input-field col m12">
						{!! Form::label('startDate') !!}
						{!! Form::text('startDate', null, ['class' => 'validate']) !!}
					</div>				

					<div class="input-field col m12">
						{!! Form::label('endDate') !!}
						{!! Form::text('endDate', null, ['class' => 'validate']) !!}
					</div>				

					<div class="input-field col m12">
						{!! Form::label('description') !!}
						{!! Form::textarea('description', null, ['class' => 'validate', 'rows' => 5]) !!}
					</div>			

					<div class="checkbox">
						<label>
							{!! Form::checkbox('isPresent', 1, 0) !!} Are you currently working in here?
						</label>
					</div>				
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					{!! Form::submit('Add Experience', ['class' => 'btn btn-success']) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>

<div class="modal fade" id="AddEducationsModal" tabindex="-1" role="dialog" aria-labelledby="addYourEducations">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="addYourEducations">Add your Education</h4>
			</div>

			{!! Form::open(['route' => 'profile.educations.store']) !!}
				<div class="modal-body">
					<div class="input-field col m12">
						{!! Form::label('degree') !!}
						{!! Form::select('degree', $education->degree(), null, ['class' => 'validate']) !!}
					</div>
					<div class="input-field col m12">
						{!! Form::label('specialization') !!}
						{!! Form::text('specialization', null, ['class' => 'validate']) !!}
					</div>
					<div class="input-field col m12">
						{!! Form::label('institute') !!}
						{!! Form::text('institute', null, ['class' => 'validate']) !!}
					</div>				

					<div class="input-field col m12">
						{!! Form::label('yearOfCompletion', 'Year of Completion') !!}
						{!! Form::text('yearOfCompletion', null, ['class' => 'validate']) !!}
					</div>			
			
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					{!! Form::submit('Add Education', ['class' => 'btn btn-success']) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>