@extends('layouts.app')

@section('content')
	<div class="container-fluid text-center">  
	
        <!-- Display Validation Errors -->
        @include('common.errors')
	
		<div class="col-sm-8 text-left"> 
			<h1>Welcome to the customer sign-up page</h1>
			<p>Use the form below to sign up to receive special offers from your area's most popular restaurants, stores and experiences.</p>
			<hr>
			<h3>Sign Up Below:</h3>
			
			<!-- New Customer Form -->
			<form action="/addCustomer" method="POST" class="form-horizontal">
				{{ csrf_field() }}

				<!-- First Name -->
				<div class="form-group">
					<label for="fname" class="col-sm-3 control-label">First Name:</label>

					<div class="col-sm-6">
						<input type="text" name="fname" id="customer-fname" class="form-control"/>
					</div>
				</div>

				<!-- Last Name -->
				<div class="form-group">
					<label for="lname" class="col-sm-3 control-label">Last Name:</label>

					<div class="col-sm-6">
						<input type="text" name="lname" id="customer-lname" class="form-control"/>
					</div>
				</div>

				<!-- Email -->
				<div class="form-group">
					<label for="email" class="col-sm-3 control-label">Email:</label>

					<div class="col-sm-6">
						<input type="email" name="email" id="customer-email" class="form-control"/>
					</div>
				</div>

				<!-- Phone Number -->
				<div class="form-group">
					<label for="phone" class="col-sm-3 control-label">Phone #:</label>

					<div class="col-sm-6">
						<input type="phone" name="phone" id="customer-phone" class="form-control"/>
					</div>
				</div>

				<!-- Password -->
				<div class="form-group">
					<label for="password" class="col-sm-3 control-label">Password:</label>

					<div class="col-sm-6">
						<input type="password" name="password" id="customer-password" class="form-control"/>
					</div>
				</div>
				
				<b>Note: Your may login with either you email address or your phone number.</b>
				</br></br>

				<!-- Add Customer Button -->
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-6">
						<button type="submit" class="btn btn-default">
							<i class="fa fa-plus"></i> Sign Up!
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection