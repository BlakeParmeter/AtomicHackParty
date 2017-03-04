@extends('layouts.app')

@section('content')

    <div class="jumbotron">
		<h1>Welcome to Blake's submission for the Atomic hack Party!</h1>
		<p>My project is an application a company may use to message (SMS or email) their customers.</p>
		<p>Technology Utilized:</p>
		<ul>
			<li>Laravel PHP Framework</li>
			<li>XAMPP (to run MySQL and Apache)</li>
			<li>bootstrap for styling</li>
		</ul>
	</div>
	
	<div class="row">
		<div class="col-lg-4">
			<h2>New customer?</h2>
			<p>Use this application to sign up to receive the best deals from local vendors!</p>
			<p><a class="btn btn-primary" href="/customerSignup">Get Started!</a></p>
		</div>
		<div class="col-lg-4">
			<h2>Existing customer?</h2>
			<p>Login to view today's deals or to subscribe to find more deals.</p>
			<p><a class="btn btn-primary" href="/customerLogin">Login</a></p>
		</div>
		<div class="col-lg-4">
			<h2>Companies</h2>
			<p>Signup your company to better reach your customer base!</p>
			<p><a class="btn btn-primary" href="/CompanyPortal">Company Portal</a></p>
		</div>
	</div>

@endsection