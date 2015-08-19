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
									{!! Html::image(asset('images/default.png'), $currentUser->fullName, ['class' => 'img-responsive']) !!}
								</div>
							</div>

							<div class="col-md-9">
								<h2>{{ $currentUser->fullName }}</h2>
								<p class="text-muted">{{ $currentUser->country }}</p>

								<p>
									<a href="{{ route('profile.edit') }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit Profile</a>
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