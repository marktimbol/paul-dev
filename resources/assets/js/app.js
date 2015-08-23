$(document).ready(function(){
// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	$('.modal-trigger').leanModal();
	$('select').material_select();
	$('.datepicker').pickadate({
		selectMonths: true, // Creates a dropdown to control month
		selectYears: 15, // Creates a dropdown of 15 years to control year
		formatSubmit: 'yyyy-mm-dd'
	});	
	$(".dropdown-button").dropdown({
		hover: true
	});
});

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