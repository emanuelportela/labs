@extends('layouts.app2')

@section('content')

	@include('component.blog.blog1')

	<div class="page-section spad">
		<div class="container">
			<div class="row">
				@include('component.blog.blog2')
				@include('component.blog.blog3')
			</div>
		</div>
	</div>
	
	@include('component.newsletter')

	@endsection