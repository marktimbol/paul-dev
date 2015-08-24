@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 m6 offset-m3">
				<h2>Hire top talent for your freelance job</h2>

				@include('partials.errors')

				{!! Form::open(['route' => 'profile.jobs.store']) !!}
					<div class="row">
						<div class="input-field col s12 m12">
							<input type="text" name="title" id="title" class="validate" value="{{ old('title') }}" placeholder="e.g. Redesign my website" />
							<label for="title">Title</label>
						</div>

						<div class="row">
							<div class="col s12 m12">
								<div class="col s12 m12">
									<label>What service do you need?</label>
								</div>
							</div>

							<div class="col s12 m12">
								<div class="input-field col s12 m6">
									<input type="text" name="category" value="{{ old('category') }}" placeholder="Select a category" />
								</div>

								<div class="input-field col s12 m6">
									<input type="text" name="subCategory" value="{{ old('subCategory') }}" placeholder="Select a Sub category (optional)" />
								</div>
							</div>						
						</div>

						<div class="input-field col s12 m12">
							<textarea name="description" id="description" class="materialize-textarea" placeholder="Provide a more detailed description to help you get better proposals."></textarea>
							<label for="description">Description</label>
						</div>

						<div class="col s12 m12">
							<h4>More Options</h4>
							<div class="row">
								<div class="input-field col s12 m12">
									<input type="text" name="skills" id="skills" value="{{ old('skills') }}" class="validate" />
									<label for="skills">Which skills are needed for this job? <span class="optional">(optional)</span></label>
								</div>

								<div class="col s12 m12">
									<label>What is your budget to pay for the work? <span class="optional">(optional)</span>
								</div>

								<div class="col s12 m12">
									<div class="row">
										<div class="input-field col s12 m6">
											<select name="budgetType">
												<option value="Fixed Budget">Fixed Budget</option>
												<option value="Per Hour">Per Hour</option>
											</select>
										</div>

										<div class="input-field col s12 m6">
											<select name="budgetCost">
												<option value="$250 - $1,000">$250 - $1,000</option>
											</select>
										</div>
									</div>
								</div>	

								<div class="col s12 m12">
									<label>Where will the freelancer be working?</label>
									<p></p>
									<div class="row">
										<div class="col s12 m3">
											<input type="radio" name="location" id="jobSite_onSite" value="On Site" class="with-gap" />
											<label for="jobSite_onSite">On Site</label>
										</div>

										<div class="col s12 m3">
											<input type="radio" name="location" id="jobSite_anywhere" value="From Anywhere" checked class="with-gap" />
											<label for="jobSite_anywhere">From Anywhere</label>									
										</div>
									</div>

									<div class="divider"></div>
									<p></p>

									<button type="submit" class="btn btn-large btn-full waves-effect waves-light">Post your job now</button>
								</div>


							</div>
						</div>
					</div>

				{!! Form::close() !!}	
			</div>
		</div>
	</div>
	
@endsection