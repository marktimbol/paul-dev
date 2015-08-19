<!-- AddSkillModal -->
<div class="modal fade" id="AddSkillModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add your Skills</h4>
			</div>
			{!! Form::open(['route' => 'profile.skills.store']) !!}
				<div class="modal-body">
					<div class="form-group">
						{!! Form::label('title') !!}
						{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Web Developer']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('years_of_experience', 'Years of Experience') !!}
						{!! Form::select('years_of_experience', $skills->yearsOfExperience(), null, ['class' => 'form-control']) !!}
					</div>	
					<div class="form-group">
						{!! Form::label('description') !!}
						{!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => "Put yourself in the employer's shoes. What would they need to know to pick you above everyone else?"]) !!}
					</div>														
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					{!! Form::submit('Add Skill', ['class' => 'btn btn-success']) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div><!--Add Skill Modal END-->	

<!-- AddExperienceModal -->
<div class="modal fade" id="AddExperienceModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add your Experience</h4>
			</div>

			{!! Form::open(['route' => 'profile.work-experiences.store']) !!}
				<div class="modal-body">
					<div class="form-group">
						{!! Form::label('companyName') !!}
						{!! Form::text('companyName', null, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('website') !!}
						{!! Form::text('website', null, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('startDate') !!}
						{!! Form::text('startDate', null, ['class' => 'form-control']) !!}
					</div>				

					<div class="form-group">
						{!! Form::label('endDate') !!}
						{!! Form::text('endDate', null, ['class' => 'form-control']) !!}
					</div>				

					<div class="form-group">
						{!! Form::label('description') !!}
						{!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 5]) !!}
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
</div><!--AddExperienceModal END-->	

<!-- AddEducationModal -->
<div class="modal fade" id="AddEducationModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add your Education</h4>
			</div>

			{!! Form::open(['route' => 'profile.educations.store']) !!}
				<div class="modal-body">
					<div class="form-group">
						{!! Form::label('companyName') !!}
						{!! Form::text('companyName', null, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('website') !!}
						{!! Form::text('website', null, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('startDate') !!}
						{!! Form::text('startDate', null, ['class' => 'form-control']) !!}
					</div>				

					<div class="form-group">
						{!! Form::label('endDate') !!}
						{!! Form::text('endDate', null, ['class' => 'form-control']) !!}
					</div>				

					<div class="form-group">
						{!! Form::label('description') !!}
						{!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 5]) !!}
					</div>			

					<div class="checkbox">
						<label>
							{!! Form::checkbox('isPresent', 1, 0) !!} Are you currently working in here?
						</label>
					</div>				
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					{!! Form::submit('Add Education', ['class' => 'btn btn-success']) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div><!--AddEducationModal END-->	