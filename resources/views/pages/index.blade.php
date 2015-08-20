@extends('layouts.master')

@section('content')

<div class="page1">
	<div class="container">
		<div class="row">
			<div class="jumbotron">
				<div class="col s12 m6 offset-m3">
					<h2 class="center-align">The #1 destination to hire freelance talent on demand</h2>
					<div class="row">
						<div class="col s12 m6">
							<a href="/auth/register" class="btn  waves-effect waves-light btn-large left">Post Your Job <span>It's FREE</span></a>
						</div>

						<div class="col s12 m6">
							<a href="/auth/register" class="btn blue waves-effect waves-light btn-large right">Become a Freelancer</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection