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
							<div class="col s4 m3">
								<div class="profile-picture">
									{!! Html::image(asset('images/default.png'), $currentUser->fullName, ['class' => 'img-responsive']) !!}
								</div>
							</div>

							<div class="col s8 m9">
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
					<div class="col s12 m12">
						<div class="btn-group">
							<button class="btn waves-effect waves-light col s6 m3 modal-trigger" data-target="AddSkillModal"><i class="fa fa-check"></i> Add your skills</button>
							<button class="btn waves-effect waves-light col s6 m3"><i class="fa fa-check"></i> Add a photo</button>
							<button class="btn waves-effect waves-light col s6 m3 modal-trigger" data-target="AddExperienceModal"><i class="fa fa-check"></i> Add employment history</button>
							<button class="btn waves-effect waves-light col s6 m3 modal-trigger" data-target="AddEducationsModal"><i class="fa fa-check"></i> Add education</button>			
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
										
										@foreach( $currentUser->skills as $skill )
										<div class="row">
											<div class="col s11 m9">
												{{ $skill->title }}
											</div>

											<div class="col s1 m3">
												{!! Form::open(['method' => 'DELETE', 'route' => ['profile.skills.destroy', $skill->id]]) !!}
													<button type="submit" class="btn waves-effect waves-light btn-flat"><i class="tiny material-icons">delete</i></button>
												{!! Form::close() !!}
											</div>
										</div>
										@endforeach									
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
															<i class="tiny material-icons">info_outline</i>
															<strong>{!! Html::link($experience->website, $experience->companyName, ['target' => '_blank']) !!}</strong><br />
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
									<button type="button" class="btn waves-effect waves-light btn modal-trigger" data-target="AddEducationsModal">Add</button>
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