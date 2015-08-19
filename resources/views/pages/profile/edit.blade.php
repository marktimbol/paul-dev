@extends('layouts.master')

@section('content')

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
										<a href="#" class="btn btn-default btn-sm">Add</a>
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
	</div>

@endsection