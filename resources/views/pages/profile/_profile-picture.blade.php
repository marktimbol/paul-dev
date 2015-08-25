<div class="row">
	<div class="col m8">
		<div class="row">
			<div class="col s4 m4">
				<div class="card waves-effect waves-block waves-light">
					<div class="card-image">
						{!! Html::image(asset(profilePicturePath()), $currentUser->fullName, ['class' => 'activator']) !!}									
					</div>
				    <div class="card-content">
				    	<span class="card-title activator grey-text text-darken-4 ">Upload Photo <i class="material-icons right">more_vert</i></span>
				    </div>
				    <div class="card-reveal">
				    	<span class="card-title grey-text text-darken-4">Upload Photo <i class="material-icons right">close</i></span>

				      	{!! Form::open(['method' => 'PUT', 'route' => 'profile.updatePicture', 'id' => 'UpdateProfilePictureForm', 'class' => 'dropzone', 'files' => true]) !!}

				      	{!! Form::close() !!}
				    </div>									
				</div>
			</div>

			<div class="col s8 m8">
				<h2>{{ $currentUser->fullName }}</h2>	

				<div class="row">
					<div class="input-field col m12">
						<form method="POST" v-on="submit: updateBio">
							{!! csrf_field() !!}
							<textarea class="materialize-textarea" id="bio" v-model="user.bio"></textarea>
							<label for="bio" class="active">Bio</label>
							<button type="submit" class="btn blue tiny waves-effect waves-light">Save</button>
						</form>	
												
					</div>			
				</div>	
			</div>
		</div>
	</div>	
</div>
