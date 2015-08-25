<div class="card">
	<div class="card-content">
		<span class="card-title black-text">My Employment</span>
		<ul class="workExperiences">
			@foreach( $currentUser->workExperiences as $experience )
				<li>
					<div class="left">
						<p>
							<i class="tiny material-icons">info_outline</i>
							<a href="#EditWorkExperienceModal-{{$experience->id}}" class="modal-trigger"><strong>{{ $experience->companyName }}</strong></a><br />
							<span class="grey-text"><i class="tiny material-icons">perm_contact_calendar</i> {{ $experience->startDate }} - {{ $experience->endDate }}</span>
						</p>
					</div>

					<div class="modal modal-fixed-footer" id="EditWorkExperienceModal-{{$experience->id}}">
						{!! Form::model( $experience, ['method' => 'PUT', 'route' => ['profile.work-experiences.update', $experience->id]]) !!}
							<div class="modal-content">
								<h4>Edit Experience</h4>
								@include('partials.errors')
								@include('pages.profile.work-experiences._form')
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn waves-effect waves-green">Update</button>&nbsp;															
							</div>
						{!! Form::close() !!}  
						
						<div class="modal-footer delete-btn">
							{!! Form::open(['method' => 'DELETE', 'route' => ['profile.work-experiences.destroy', $experience->id], 'class' => 'left']) !!}
								<button type="submit" class="btn red waves-effect waves-light"><i class="tiny material-icons">delete</i></button>
							{!! Form::close() !!}
						</div>															
					</div>													
				</li>
			@endforeach
		</ul>
	</div>

	<div class="card-action">
		<button type="button" class="btn waves-effect waves-light modal-trigger" data-target="AddExperienceModal">Add</button>
	</div>
</div>