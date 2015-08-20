<div class="row">
	<div class="col m12 ">
		@if( !$currentUser->active )
			<div class="card-panel orange lighten-2">
				<p class="white-text">Your profile is not yet active. Any jobs, skills or hobbies that you post will not be visible to other users until you have activated your account.
				If you did not receive an activation email, you can change your email address or we can resend the email. Don't forget to check your spam folder!</p>
			</div>
		@endif
	</div>
</div>