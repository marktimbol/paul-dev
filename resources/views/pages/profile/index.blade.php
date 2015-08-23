@extends('layouts.master')

@section('content')

@inject('skills', 'App\Services\Skills')

	<div class="container">

		@include('partials.warnings')

		<div class="row profile-overview" id="profileOverview">
			

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
										<form method="POST" v-on="submit: updateBio">
											{!! csrf_field() !!}
											<input type="text" id="bio" v-model="user.bio" />
											<label for="bio" class="active">Bio</label>
											<button type="submit" class="btn waves-effect waves-light hide">Save</button>
										</form>	
																
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
																<button type="submit" class="btn waves-effect waves-green">Update Skill</button>&nbsp;															
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
							</div>														
						</div>
					</div>
				</div>			
			</div>
		</div>

		@include('pages.profile.partials.modals')
	</div>

@endsection