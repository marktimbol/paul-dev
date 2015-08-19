<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			@if( Auth::check() )
				<a class="navbar-brand" href="{{ route('profile') }}">Paul</a>
			@else
				<a class="navbar-brand" href="/">Paul</a>
			@endif
			
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Helpdesk</a></li>
				<li><a href="#">Browse Jobs</a></li>
				<li><a href="#">Blog</a></li>
				@if( Auth::check() )
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $currentUser->fullName }} <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">My Profile</a></li>
						<li><a href="#">Manage Jobs</a></li>
						<li><a href="#">My Applications</a></li>
						<li><a href="#">Notifications</a></li>
						<li><a href="#">Account Settings</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="/auth/logout">Log out</a></li>
					</ul>
				</li>				
				
				@else
				<li><a href="/auth/register">Sign up</a></li>
				<li><a href="/auth/login">Log in</a></li>				
				@endif
			</ul>
		</div>
  	</div>
</nav>
