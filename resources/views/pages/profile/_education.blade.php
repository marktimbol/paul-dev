<div class="card">
	<div class="card-content">
		<span class="card-title black-text">My Education</span>
		<ul class="educations">
			@foreach( $currentUser->educations as $education )
				<li>
					<div class="left">
						<p>
							<i class="tiny material-icons">info_outline</i><a href="#EditEducationModal-{{$education->id}}" class="modal-trigger"><strong>{{ $education->degree }}</strong></a><br />
							<span class="grey-text">in</span> {{ $education->specialization}}<br />
							<i class="tiny material-icons">room</i> {{ $education->institute }}, {{ $education->yearOfCompletion }}
						</p>
					</div>

					<div class="modal modal-fixed-footer" id="EditEducationModal-{{$education->id}}">
						{!! Form::model( $education, ['method' => 'PUT', 'route' => ['profile.educations.update', $education->id]]) !!}
							<div class="modal-content">
								<h4>Edit Education</h4>
								@include('partials.errors')
								@include('pages.profile.educations._form')
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn waves-effect waves-green">Update Education</button>&nbsp;															
							</div>
						{!! Form::close() !!}  
						
						<div class="modal-footer delete-btn">
							{!! Form::open(['method' => 'DELETE', 'route' => ['profile.educations.destroy', $education->id], 'class' => 'left']) !!}
								<button type="submit" class="btn red waves-effect waves-light"><i class="tiny material-icons">delete</i></button>
							{!! Form::close() !!}
						</div>															
					</div>
				</li>
			@endforeach
		</ul>										
	</div>

	<div class="card-action">
	<button type="button" class="btn waves-effect waves-light btn modal-trigger" data-target="AddEducationsModal">Add</button>
	</div>
</div>