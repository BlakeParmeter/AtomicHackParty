@extends('layouts.app')

@section('content')

	<div class="container-fluid text-center">  
		<h1>Welcome to the company portal</h1>
		<p>Here you will be able to sign your company up to better reach your customers.</p>
		
		<table>
			<thead>
				<th>Some Data</th>
				<th>Value</th>
			</thead>
			
			<tbody>
				<tr>
					<td>Number of campaigns</td>
					<td>0</td>
				</tr>
				<tr>
					<td>Number of customers</td>
					<td>0</td>
				</tr>
			</tbody>
		</table>
		</br>
			
		<div class='row'>
			<div class="col-md-2">
				<p><a class="btn btn-primary" href="/#">Build New Campaign</a></p>
			</div>
			<div class="col-md-2">
				<p><a class="btn btn-primary" href="/#">Import Leads</a></p>
			</div>
			<div class="col-md-2">
				<p><a class="btn btn-primary" href="/#">Purchase Leads</a></p>
			</div>
			<div class="col-md-2">
				<p><a class="btn btn-primary" href="/#">Sell Leads</a></p>
			</div>
		</div>
	</div>
	<br/>

@endsection