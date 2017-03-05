@extends('layouts.app')

@section('content')

	<div class="container-fluid text-center">  

		<!-- Display Validation Errors -->
		@include('common.errors')
		
		<div class="col-sm-8 text-left"> 
			<h1>Welcome to your portal, {{$user->fname}}</h1>
		</div>
	</div>
@endsection