Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

new Vue({
	el: '#profileOverview',

	data: {
		user: []
	},

	ready: function() {
		this.fetchCurrentUser();
	},

	methods: {

		fetchCurrentUser: function() {
			this.$http.get('/auth/user', function(user) {
				this.$set('user', user);
				console.log(user);
			});
		},


		updateBio: function(e) {
			
			e.preventDefault();

			var newBio = this.user.bio;

			this.$http.put('profile/update-bio', { bio: newBio });				
		}
	}
});
//# sourceMappingURL=profile.js.map