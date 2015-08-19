@extends('layouts.master')

@section('content')

<div class="page1">
	<div class="container">
		<div class="row">
			<div class="jumbotron">
				<div class="col-md-6 col-md-offset-3">
					<h2 class="text-center">The #1 destination to hire freelance talent on demand</h2>
					<div class="row">
						<div class="col-md-6">
							<a href="/auth/register" class="btn btn-success btn-lg btn-block">Post Your Job<br /><span>It's FREE</span></a>
						</div>

						<div class="col-md-6">
							<a href="/auth/register" class="btn btn-primary btn-lg btn-block">Find a Job<br /><span>Become a Freelancer</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection