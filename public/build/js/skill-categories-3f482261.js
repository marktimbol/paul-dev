Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

new Vue({
	el: '#skillCategories',

	data: {
		user: [],
		categories: [],
		newCategory: { name: '' }
	},

	ready: function() {
		this.fetchCurrentUser();
		this.fetchSkillCategories();
	},

	methods: {

		fetchCurrentUser: function() {
			this.$http.get('/api/v1/skill-categories', function(categories) {
				this.$set('categories', categories);
				console.log(categories);
			});
		},

		fetchSkillCategories: function() {
			this.$http.get('/auth/user', function(user) {
				this.$set('user', user);
				console.log(user);
			});
		},		

		addNew: function(e) {
			e.preventDefault();

			var category = this.newCategory;

			this.categories.push(category);

			this.newCategory = { name: '' };

			this.$http.post('/api/v1/skill-categories', category);
		},

		editCategory: function(category) {

			this.newCategory.name = category.name;

			this.$$.name.focus();

		},

		deleteCategory: function(category) {	

			this.categories.$remove(category);

			this.$http.delete('/api/v1/skill-categories/'+category.id, []);
		}

		// updateBio: function(e) {
			
		// 	e.preventDefault();

		// 	var newBio = this.user.bio;

		// 	this.$http.put('profile/update-bio', { bio: newBio });				
		// }
	}
});
//# sourceMappingURL=skill-categories.js.map