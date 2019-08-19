<?php
	session_start();
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Welcome</title>
</head>
<body>

	<br>
	<br>
	<div class="container col-lg-6">
		<a href="login.php"><h5 class="text-right">Log-out</h5></a>
	<br>
	<br>
		<h1>Welcome <!-- <?php echo $name; ?> --></h1>
		<h1>Choose your Hero!</h1>
	<br>
	<br>
		<div class="text-center">
			<a href="loginPageLeft.php"><img src="Pic\ninja.jpg" width ="200" height="150"></a>
			<a href="loginPageRight.php"><img src="Pic\Samurai.jpg" width ="200" height="150"></a>

		</div>
	</div>
	</div>

</body>
</html>