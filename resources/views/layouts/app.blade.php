<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Atomic Hack Party!</title>

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
        <!-- Bootstrap -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>

    <body>
	
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">Atomic Hack Party</a>
			</div>
			<ul class="nav navbar-nav">
			  <li><a href="/">Home</a></li>
			  <li><a href="/customerSignup">Sign Up</a></li>
			  <li><a href="/customerLogin">Login</a></li>
			  <li><a href="/CompanyPortal">Company Portal</a></li>
			</ul>
		  </div>
		</nav>
	
		<div class='container'>
			@yield('content')
		
			<footer class='footer muted credit'>
				<p>Property of Blake Parmeter / March 4, 2017 / Built for the Gravitational Marketing Atomic Hack Party.</p>
			</footer>
		</div>
    </body>
</html>