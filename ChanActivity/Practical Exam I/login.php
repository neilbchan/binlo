<?php
	if(isset($_POST['submit']))
	{
		session_start();
		$_SESSION['username'] = htmlentities($_POST['username']);
		$_SESSION['password'] = htmlentities($_POST['password']);
		header('location: loginWelcome.php');
	}
?>

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<title>Login</title>
	<style>body{
		background-image: url("Pic/plants.jpg");
		background-repeat: no-repeat;
		background-size: 99.90%;
		background-position: center; 
	} </style>
</head>
<body>
	<br>
	<br>

	<div class="container col-lg-5">
		
		<form class="form-signin"  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

			<div class="text-center">
			  <img src="Pic\logo.png" width ="200" height="200">
			</div>
				
				<br>
			  	<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
			  	<label for="username" class="sr-only">Email address</label>
			  	<input type="username" id="username" class="form-control" placeholder="Username" name="username" required autofocus>
			  	
			  	<label for="inputPassword" class="sr-only">Password</label>
			  	<input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
			 	<br>
			 <div>	
			 	<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Log in</button>
			  	<a href="loginSignUp.php" class="btn btn-lg btn-primary btn-block">Register</a>
			</div>
		</form>
	</div>

</body>
</html>