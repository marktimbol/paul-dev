<div class="navbar-fixed">
	<nav class="top-nav">
		<div class="container">
			<div class="nav-wrapper">
				@if( Auth::check() )
					<a class="brand-logo" href="{{ route('profile.index') }}">Paul</a>
				@else
					<a class="brand-logo" href="/">Paul</a>
				@endif	
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="#">Helpdesk</a></li>
					<li><a href="#">Browse Jobs</a></li>
					<li><a href="#">Blog</a></li>
					@if( Auth::check() )
						<li><a href="{{ route('profile.jobs.create') }}" class="btn tiny blue waves-effect waves-light">Post a Job</a></li>
						<li>
							<a href="#" class="dropdown-button" data-activates="userProfileDropdown">{{ Auth::user()->fullName }} <span class="caret"></span></a>
						</li>				
					@else
						<li><a href="/auth/register">Sign up</a></li>
						<li><a href="/auth/login">Log in</a></li>				
					@endif
				</ul>
			</div>
		</div>
	</nav>
</div>

<ul class="dropdown-content" id="userProfileDropdown">
	<li><a href="#">My Profile</a></li>
	<li><a href="#">Manage Jobs</a></li>
	<li><a href="#">My Applications</a></li>
	<li><a href="#">Notifications</a></li>
	<li><a href="#">Account Settings</a></li>
	<li role="separator" class="divider"></li>
	<li><a href="/auth/logout">Log out</a></li>
</ul>