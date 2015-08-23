<div class="modal modal-fixed-footer" id="AddSkillModal">
	{!! Form::open(['route' => 'profile.skills.store']) !!}
		<div class="modal-content">
			<h4>Add your Skills</h4>
			@include('partials.errors')
			@include('pages.profile.skills._form')
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
			@include('partials.errors')
			@include('pages.profile.work-experiences._form')
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn waves-effect waves-green">Add Experience</button>
		</div>
	{!! Form::close() !!}
</div>


<div class="modal modal-fixed-footer" id="AddEducationsModal">
	{!! Form::open(['route' => 'profile.educations.store']) !!}
		<div class="modal-content">
			<h4>Add your Education</h4>
			@include('partials.errors')
			@include('pages.profile.educations._form')
		</div>

		<div class="modal-footer">
			<button type="submit" class="btn waves-effect waves-light">Add Education</button>
		</div>
	{!! Form::close() !!}
</div>