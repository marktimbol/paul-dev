@extends('layouts.master')

@section('content')

@inject('skills', 'App\Services\Skills');

	<div class="container">

		@include('partials.warnings')

		<div class="row profile-overview">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-3">
								<div class="profile-picture">
									<img src="{{ public_path() }}/images/default.png" alt="{{ $currentUser->fullName }}" title="{{ $currentUser->fullName }}" class="img-responsive" />
								</div>
							</div>

							<div class="col-md-9">
								<h2>{{ $currentUser->fullName }}</h2>
								<p class="text-muted">{{ $currentUser->country }}</p>		

								{!! Form::open() !!}
									{!! Form::textarea('bio', null, ['class' => 'form-control', 'placeholder' => 'You have no bio right now. In a few words, what makes you YOU?', 'rows' => 4]) !!}
								{!! Form::close() !!}					
							</div>
						</div>
					</div>	
				</div>

				<hr />

				<div class="row">
					<div class="col-md-12">
						<div class="btn-group">
							<a href="#" class="btn btn-default btn-sm"><i class="fa fa-check"></i> Add your skills</a>
							<a href="#" class="btn btn-default btn-sm"><i class="fa fa-check"></i> Add a photo</a>
							<a href="#" class="btn btn-default btn-sm"><i class="fa fa-check"></i> Add employment history</a>
							<a href="#" class="btn btn-default btn-sm"><i class="fa fa-check"></i> Add education</a>			
						</div>
					</div>
				</div>	

				<p>&nbsp;</p>

				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4">
								<div class="well">
									<div class="well-title-container">
										<h4 class="well-title">My Skills <span></span></h4>
										<a href="#" class="btn btn-default btn-sm" data-toggle="modal" data-target="#AddSkillModal">Add</a>
									</div>
									<div class="well-content">

									</div>									
								</div>
							</div>

							<div class="col-md-4">
								<div class="well">
									<div class="well-title-container">
										<h4 class="well-title">My Employment <span></span></h4>
										<a href="#" class="btn btn-default btn-sm">Add</a>
									</div>

									<div class="well-content">

									</div>									
								</div>
							</div>

							<div class="col-md-4">
								<div class="well">
									<div class="well-title-container">
										<h4 class="well-title">My Education <span></span></h4>
										<a href="#" class="btn btn-default btn-sm">Add</a>
									</div>

									<div class="well-content">

									</div>
								</div>
							</div>														
						</div>
					</div>
				</div>			
			</div>
		</div>

		<!-- AddSkillModal -->
		<div class="modal fade" id="AddSkillModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Add your Skills</h4>
					</div>
					{!! Form::open() !!}
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
		</div>		
	</div>

@endsection