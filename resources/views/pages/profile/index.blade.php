@extends('layouts.master')

@section('content')

@inject('skills', 'App\Services\Skills')

	<div class="container">

		@include('partials.warnings')

		<div class="row profile-overview">
			<div class="col m12">
				<div class="row">
					<div class="col m8">
						<div class="row">
							<div class="col m3">
								<div class="profile-picture">
									{!! Html::image(asset('images/default.png'), $currentUser->fullName, ['class' => 'img-responsive']) !!}
								</div>
							</div>

							<div class="col m9">
								<h2>{{ $currentUser->fullName }}</h2>	

								<div class="row">
									<div class="input-field col m12">
										{!! Form::open() !!}
											{!! Form::textarea('bio', null, ['class' => 'materialize-textarea', 'placeholder' => 'You have no bio right now. In a few words, what makes you YOU?', 'rows' => 4]) !!}
											{!! Form::label('bio') !!}
										{!! Form::close() !!}	
									</div>			
								</div>	
							</div>
						</div>
					</div>	
				</div>


				<div class="row">
					<div class="col m12">
						<div class="btn-group">
							<a href="#" class="btn waves-effect waves-light" data-toggle="modal" data-target="#AddSkillModal"><i class="fa fa-check"></i> Add your skills</a>
							<a href="#" class="btn waves-effect waves-light"><i class="fa fa-check"></i> Add a photo</a>
							<a href="#" class="btn waves-effect waves-light" data-toggle="modal" data-target="#AddExperienceModal"><i class="fa fa-check"></i> Add employment history</a>
							<a href="#" class="btn waves-effect waves-light" data-toggle="modal" data-target="#AddEducationsModal"><i class="fa fa-check"></i> Add education</a>			
						</div>
					</div>
				</div>	

				<p>&nbsp;</p>

				<div class="row">
					<div class="col m12">
						<div class="row">
							<div class="col m4 s12">
								<div class="card">
									<div class="card-content">
										<span class="card-title black-text">My Skills</span>
										<ul class="skills">
											@foreach( $currentUser->skills as $skill )
												<li>{{ $skill->title }}
													{!! Form::open(['method' => 'DELETE', 'route' => ['profile.skills.destroy', $skill->id], 'class' => 'right']) !!}
														<button type="submit" class="btn waves-effect waves-light btn-flat"><i class="tiny material-icons">delete</i></button>
													{!! Form::close() !!}
												</li>
											@endforeach
										</ul>										
									</div>	

									<div class="card-action">
										<button type="button" class="btn waves-effect waves-light modal-trigger" data-target="AddSkillModal">Add</button>
									</div>
								</div>
							</div>

							<div class="col m4 s12">
								<div class="card">
									<div class="card-content">
										<span class="card-title black-text">My Employment</span>
										<ul class="workExperiences">
											@foreach( $currentUser->workExperiences as $experience )
												<li>
													<div class="left">
														<p>
															<i class="tiny material-icons">info_outline</i> <strong>{{ $experience->companyName }}</strong><br />
															{!! Html::link($experience->website, $experience->website, ['target' => '_blank']) !!}<br />
															<span class="grey-text"><i class="tiny material-icons">perm_contact_calendar</i> Dec. 1, 2011 - Dec. 14, 2012</span>
														</p>
													</div>

													{!! Form::open(['method' => 'DELETE', 'route' => ['profile.work-experiences.destroy', $experience->id], 'class' => 'right']) !!}
														<button type="submit" class="btn waves-effect waves-light btn-flat"><i class="tiny material-icons">delete</i></button>
													{!! Form::close() !!}
												</li>
											@endforeach
										</ul>
									</div>

									<div class="card-action">
										<button type="button" class="btn waves-effect waves-light modal-trigger" data-target="AddExperienceModal">Add</button>
									</div>
								</div>
							</div>

							<div class="col m4 s12">
								<div class="card">
									<div class="card-content">
										<span class="card-title black-text">My Education</span>
										<ul class="educations">
											@foreach( $currentUser->educations as $education )
												<li>
													<div class="left">
														<p>
															<i class="tiny material-icons">info_outline</i> <strong>{{ $education->degree }}</strong><br />
															<span class="grey-text">in</span> {{ $education->specialization}}<br />
															<i class="tiny material-icons">room</i> {{ $education->institute }}, {{ $education->yearOfCompletion }}
														</p>
													</div>

													{!! Form::open(['method' => 'DELETE', 'route' => ['profile.educations.destroy', $education->id], 'class' => 'right']) !!}
														<button type="submit" class="btn waves-effect waves-light btn-flat"><i class="tiny material-icons">delete</i></button>
													{!! Form::close() !!}
												</li>
											@endforeach
										</ul>										
									</div>

									<div class="card-action">
									<button type="button" class="btn waves-effect waves-light btn" data-toggle="modal" data-target="#AddEducationsModal">Add</button>
									</div>
								</div>
							</div>														
						</div>
					</div>
				</div>			
			</div>
		</div>

		@include('pages.profile.partials.modals')
	</div>

@endsection