<div class="card">
	<div class="card-content">
		<span class="card-title black-text">My Skills</span>
		
		<ul class="skills">
			@foreach( $currentUser->skills as $skill)
		 		<li><button type="button" class="modal-trigger" data-target="EditSkillModal-{{$skill->id}}">{{ $skill->title }}</button>
					<div class="modal modal-fixed-footer" id="EditSkillModal-{{$skill->id}}">
						{!! Form::model( $skill, ['method' => 'PUT', 'route' => ['profile.skills.update', $skill->id]]) !!}
							<div class="modal-content">
								<h4>Edit <span class="text-italic">{{ $skill->title }}</span></h4>
								@include('partials.errors')
								@include('pages.profile.skills._form')
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn waves-effect waves-green">Update Skill</button>&nbsp;															
							</div>
						{!! Form::close() !!}  
						<div class="modal-footer delete-btn">
							{!! Form::open(['method' => 'DELETE', 'route' => ['profile.skills.destroy', $skill->id], 'class' => 'left']) !!}
								<button type="submit" class="btn red waves-effect waves-light"><i class="tiny material-icons">delete</i></button>
							{!! Form::close() !!}
						</div>															
					</div>
				</li>						
			@endforeach
		</ul>					
	</div>	

	<div class="card-action">
		<button type="button" class="btn waves-effect waves-light modal-trigger" data-target="AddSkillModal">Add</button>
	</div>
</div>