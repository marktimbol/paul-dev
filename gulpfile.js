var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
	mix.sass('app.scss', 'resources/assets/css/app.css')
    	
    	.styles([
            '../bower_components/sweetalert/dist/sweetalert.css',
            '../bower_components/materialize/dist/css/materialize.css',
            '../bower_components/dropzone/dist/dropzone.css',
            '../bower_components/components-font-awesome/css/font-awesome.css',
    		'app.css'
    	], 'public/css/all.css')

    	.scripts([
    	   '../bower_components/jquery/dist/jquery.js',
           '../bower_components/materialize/dist/js/materialize.min.js',
    	   //'../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js',
           '../bower_components/sweetalert/dist/sweetalert.min.js',
           '../bower_components/dropzone/dist/dropzone.js',
           '../bower_components/vue/dist/vue.js',
           '../bower_components/vue-resource/dist/vue-resource.js',
            'app.js'
    	], 'public/js/all.js')

        .scripts([
            'vue-profile.js'
            ], 'public/js/profile.js')

        .scripts([
            'vue-skill-categories.js'
            ], 'public/js/skill-categories.js')

    	.version([
    		'css/all.css',
    		'js/all.js',
            'js/profile.js',
            'js/skill-categories.js'
    	]);
});
