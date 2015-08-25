@extends('layouts.master')

@section('content')

@inject('skills', 'App\Services\Skills')

	<div class="container">

		@include('partials.warnings')

		<div class="row profile-overview" id="profileOverview">
			
			<div class="col m12">

				@include('pages.profile._profile-picture')

				<div class="row">
					<div class="col m12">
						<div class="row">
							<div class="col m4 s12">
								@include('pages.profile._skills')
							</div>

							<div class="col m4 s12">
								@include('pages.profile._employment')
							</div>

							<div class="col m4 s12">
								@include('pages.profile._education')
							</div>														
						</div>
					</div>
				</div>			
			</div>
		</div>

		@include('pages.profile.partials.modals')

	</div>

@endsection

@section('footer')
	<script src="{{ elixir('js/profile.js') }}"></script>
@endsection