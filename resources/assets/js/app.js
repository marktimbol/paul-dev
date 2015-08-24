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

	Dropzone.options.UpdateProfilePictureForm = {
		paramName: 'photo',
		masFilesize: 3,
		acceptedFiles: '.jpg, .jpeg, .png, .bmp',
		dictDefaultMessage: 'Drop your profile picture here'
	}

});