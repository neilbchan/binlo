<?php
	if(isset($_POST['submit'])){
		session_start();

		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['message'] = $_POST['message'];
		header('Location: page2.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Sign Up</title>
</head>
<body>
	<br>
	<br>
	<h1 class="text-center">Sign Up</h1>
	<br>
	<br>
	<div class="container col-lg-6">
		<form class="form-signin">

			<div class="form-group row">
	    		<label for="firstName" class="col-sm-2 col-form-label">First Name:</label>
	    			<div class="col-sm-10">
	      				<input type="text" class="form-control" id="firstName" placeholder="First Name" required autofocus>
	    			</div>
	  		</div>

	  		<div class="form-group row">
	    		<label for="lastName" class="col-sm-2 col-form-label">Last Name:</label>
	    			<div class="col-sm-10">
	      				<input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
	    			</div>
	  		</div>

	  		<div class="form-group row">
	    		<label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
	    			<div class="col-sm-10"
>	      				<input type="text" class="form-control" id="staticEmail" placeholder="email@example.com" required>
	    			</div>
	  		</div>

	  		<div class="form-group row">
	    		<label for="username" class="col-sm-2 col-form-label">Username:</label>
	    			<div class="col-sm-10">
	      				<input type="text" class="form-control" id="username" placeholder="Username" required>
	    			</div>
	  		</div>

	  		<div class="form-group row">
	    		<label for="inputPassword" class="col-sm-2 col-form-label">Password:</label>
	    			<div class="col-sm-10">
	      				<input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
	    			</div>
	  		</div>
			<br>
	  		<a href="loginCongrats.php" class="btn btn-lg btn-primary btn-block">Create Account</a>

		</form>
	</div>
</body>
</html>