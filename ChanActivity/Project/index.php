<?php
	require ('config/config.inc.php');
	session_start();

	//Check submit
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);

		//Query
		$sql = "SELECT * FROM users WHERE users_username = '$username' and users_password = '$password'";
		// $sql = "SELECT * FROM users WHERE users_username = '$username'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck == 1) {
	       header("Location: creativewebdesign.php");
	    }else {
	    	?>
	    		<script>
	    			alert("Invalid Credentials")
	    		</script>
			<?php
	    }
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- try.css -->
	<link rel="stylesheet" type="text/css" href="css/try.css?v=1.1">

	<!-- Symbol -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>



<body>
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<!-- LOGO -->
					<div class="text-center">
					  <img src="images\pnglogo.png" width ="200" height="200">
					</div>
					<!-- Label -->
				
					<span class="login100-form-title">
						Member Login
					</span>
					 
					<!-- Username inputbox -->
					<div class="wrap-input100">
						<input class="input100" type="username" placeholder="Username" name="username" required autofocus>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					  	
					<!-- Password inputbox -->
					<div class="wrap-input100">
					  	<input class="input100" type="password" placeholder="Password" name="password" required>
					  	<span class="symbol-input100" style="padding-left: 33px;">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<!-- Login button -->
					<br>
					 <div>	
					 	<button class="button button4" type="submit" name="login"><b>LOGIN<b></button>
					</div>
					<br>

					<!-- Sign-up button -->
					<div class="text-center p-t-136">
						<a class="txt2" href="signup.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
