<h4>Add New</h4>

@include('partials.errors')

<form method="POST" v-on="submit: addNew">
	{!! csrf_field() !!}
	<div class="row">
		<div class="input-field col s12 m12">
			<input type="text" id="name" v-model="newCategory.name" />
			<label for="name">Name</label>
		</div>

		<div class="input-field col s12 m12">
			<button type="submit" class="btn waves-effect waves-light">Save Data</button>
		</div>
	</div>
</form>