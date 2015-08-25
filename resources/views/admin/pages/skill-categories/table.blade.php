<h4>Categories</h4>

<div class="row">
	<div class="col s4 m4">
		<select class="browser-default">
			<option value="bulk_actions">Bulk Actions</option>
			<option value="delete">Delete</option>
		</select>
	</div>

	<div class="col s3 m1">
		<button type="submit" class="btn tiny grey waves-effect waves-light">Apply</button>
	</div>

</div>	

<table class="striped">
	<thead>
		<tr>
			<th>
				<div class="col s2 m1">
					<input type="checkbox" id="checkAll" name="checkAll" class="filled-in" />
					<label for="checkAll"></label>
				</div>
			</th>
			<th>Name</th>
		</tr>
	</thead>
	<tbody>
	
		<tr v-repeat="category in categories">
			<td width="80">
				<div class="col s2 m1">
					<input type="checkbox" name="categories[]" id="filled-in-box-@{{category.id}}" class="filled-in" value="@{{ category.id }}" />
					<label for="filled-in-box-@{{ category.id }}"></label>
				</div>								
			</td>
			<td>@{{ category.name }}
				<div class="actions">
					<a href="#" v-on="click: editCategory(category)">Edit</a> | 
					<a href="#" class="red-text" v-on="click: deleteCategory(category)">Trash</a>
				</div>
			</td>
		</tr>

	</tbody>
</table>