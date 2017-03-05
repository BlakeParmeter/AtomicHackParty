@extends('layouts.app')

@section('content')

	<div class="container-fluid text-center">  

		<!-- Display Validation Errors -->
		@include('common.errors')

		<div class="col-sm-8 text-left"> 
			<h1>Welcome to the Login Page</h1>
			<p>Log in below using your credentials</p>
			</p>You may use either your email address or your phone number to login.</p>
			<hr>
			<h3>Login in Below:</h3>
			
			<!-- New Customer Form -->
			<form action="/customerPortal" method="POST" class="form-horizontal">
				{{ csrf_field() }}

				<b>You may login with either you email address or your phone number.</b>
				</br></br>
				
				<!-- User Name -->
				<div class="form-group">
					<label for="userName" class="col-sm-3 control-label">User Name:</label>

					<div class="col-sm-6">
						<input type="text" name="user" id="customer-user" class="form-control"/>
					</div>
				</div>

				<!-- Password -->
				<div class="form-group">
					<label for="password" class="col-sm-3 control-label">Password:</label>

					<div class="col-sm-6">
						<input type="password" name="password" id="customer-password" class="form-control"/>
					</div>
				</div>

				<!-- Login Button -->
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-6">
						<button type="submit" class="btn btn-default">
							<i class="fa fa-plus"></i> Login
						</button>
					</div>
				</div>
				
			</form>
		</div>
	</div>

@endsection