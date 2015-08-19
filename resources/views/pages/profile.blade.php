@extends('layouts.master')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 ">
				@if( !$currentUser->active )
					<div class="alert alert-warning">
						<p>Your profile is not yet active. Any jobs, skills or hobbies that you post will not be visible to other users until you have activated your account.
						If you did not receive an activation email, you can change your email address or we can resend the email. Don't forget to check your spam folder!</p>
					</div>
				@endif
			</div>
		</div>

		<div class="row profile-overview">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-3">
								<div class="profile-picture">
									<img src="http://placehold.it/150x150" alt="{{ $currentUser->firstName }}" title="{{ $currentUser->firstName }}" class="img-responsive" />
								</div>
							</div>

							<div class="col-md-9">
								<h2>{{ $currentUser->fullName }}</h2>
								<p class="text-muted">{{ $currentUser->country }}</p>

								<p>
									<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit Profile</a>
								</p>								
							</div>
						</div>
					</div>	
				</div>

				<hr />

				<div class="row">
					<div class="col-md-12">
						<div class="btn-group">
							<a href="#" class="btn btn-default btn-sm"><i class="fa fa-check"></i> Add your skills</a>
							<a href="#" class="btn btn-default btn-sm"><i class="fa fa-check"></i> Add your portfolio on canvas</a>
							<a href="#" class="btn btn-default btn-sm"><i class="fa fa-check"></i> Add a photo</a>
							<a href="#" class="btn btn-default btn-sm"><i class="fa fa-check"></i> Add employment history</a>
							<a href="#" class="btn btn-default btn-sm"><i class="fa fa-check"></i> Add education</a>			
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>

@endsection