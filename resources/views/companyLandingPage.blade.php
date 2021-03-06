@extends('layouts.app')

@section('content')

	<div class="container-fluid text-center">  
		<h1>Welcome to the company portal</h1>
		<p>Here you will be able to sign your company up to better reach your customers.</p>
	
		<div class='row'>
			<div class="col-lg-6">
				<h2>New Customer?</h2>
				<button>Sign Up</button>
			</div>
			<div class="col-lg-6">
				<h2>Existing Customers</h2>
				<p><a class="btn btn-primary" href="/companyPortal">Company Portal</a></p>
			</div>
		</div>
	</div>
	<br/>

@endsection