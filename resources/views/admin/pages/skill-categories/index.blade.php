@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row" id="skillCategories">
		
			<div class="col s12 m2">
				@include('admin._sidenav')		
			</div>
			
			<div class="col s12 m3">
				@include('admin.pages.skill-categories.create')
			</div>

			<div class="col s12 m7">
				@include('admin.pages.skill-categories.table')		
			</div>
		</div>
	</div>

@endsection

@section('footer')
	<script src="{{ elixir('js/skill-categories.js') }}"></script>
@endsection