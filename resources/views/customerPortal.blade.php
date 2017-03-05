@extends('layouts.app')

@section('content')

	<div class="container-fluid text-center">  

		<!-- Display Validation Errors -->
		@include('common.errors')
		
		<div class="col-lg-16 text-left"> 
			<h1>Welcome to your portal, {{$user->fname}}</h1>
			<p>Here you are able to edit your personal information and signup for the best deals in your area</p>
			
            <table class="table table-striped task-table">	
				<thead>
					<th>Item</th>
					<th>Value</th>
				</thead>
				<tbody>
					<tr>
						<td>Phone Number:</td>
						<td><input type='text' value='{{$user->phone}}'/></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type='text' value='{{$user->email}}'/></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td></td>
					</tr>
				</tbody>
			</table>
            <button>Save Changes (not implemented)</button>
			<br/><br/>
			
			<div class="row">
				<div class="col-lg-6">
					<h2>Here the companies you are signed up for</h2>
					<p>These companies will send you offers when they become available.</p>
					<table class="table table-striped task-table">	
						<thead>
							<th>Company Name</th>
							<th>Category</th>
							<th></th>
						</thead>
						<tbody>
							<tr>
								<td>Gravitational Marketing</td>
								<td>Advertising</td>
								<td><button>Un-subscribe</button></td>
							</tr>
							<tr>
								<td>Outback Steakhouse</td>
								<td>Restaurant</td>
								<td><button>Un-subscribe</button></td>
							</tr>
							<tr>
								<td>Macy's</td>
								<td>Clothing / Household</td>
								<td><button>Un-subscribe</button></td>
							</tr>
							<tr>
								<td>Advance Auto Parts</td>
								<td>Automotive</td>
								<td><button>Un-subscribe</button></td>
							</tr>
						</tbody>
					</table>
					<button>Click here to find new companies (not implemented)</button>
				</div>
				
				<div class="col-lg-6">
					<h2>Here the companies you are signed up for</h2>
					<p>Companies who deal in these areas may send you offers.</p>
					<table class="table table-striped task-table">	
						<thead>
							<th>Item</th>
							<th></th>
						</thead>
						<tbody>
							<tr>
								<td>Outdoors</td>
								<td><button>Un-subscribe</button></td>
							</tr>
							<tr>
								<td>Restaurant / Asian</td>
								<td><button>Un-subscribe</button></td>
							</tr>
							<tr>
								<td>Sporting goods</td>
								<td><button>Un-subscribe</button></td>
							</tr>
						</tbody>
					</table>
					<button>Click here to find new categories (not implemented)</button>
				</div>
			</div>
		</div>
	</div>
	<br/><br/>
@endsection