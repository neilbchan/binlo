<?php
	session_start();
	require ('config/config.inc.php');

	//Check submit
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);

		//Query
		$sql = "SELECT * FROM users WHERE users_username = '$username' and users_password = '$password' LIMIT 1";
		$result = mysqli_query($conn, $sql);
		$sessquery = $conn->query("SELECT * FROM users WHERE users_username = '$username' and users_password = '$password' LIMIT 1");
		$sess = mysqli_fetch_object($sessquery);

		//Check if sql is correct to log-in
		if(mysqli_num_rows($result) == 1) {


			$user_type = mysqli_fetch_assoc($result);
			//Check if user is admin
			if($user_type['users_type'] == 'admin'){
				
				$_SESSION["users_id"] = $sess->users_id;
				$_SESSION["users_username"] = $sess->users_username;
				$_SESSION["users_firstname"] = $sess->users_firstname;
				$_SESSION["users_lastname"] = $sess->users_lastname;
            	$_SESSION["users_email"] = $sess->users_email;
				$_SESSION["users_contact"] = $sess->users_contact;

				?>
	                <script type="text/javascript">
	                	alert("Welcome Admin");
	                    window.location = "creativewebdesign.php";
	                </script>
				<?php

			}else{
				$_SESSION["users_id"] = $sess->users_id;
				$_SESSION["users_username"] = $sess->users_username;
				$_SESSION["users_firstname"] = $sess->users_firstname;
				$_SESSION["users_lastname"] = $sess->users_lastname;
            	$_SESSION["users_email"] = $sess->users_email;
				$_SESSION["users_contact"] = $sess->users_contact;

				?>
	                <script type="text/javascript">
	                	alert("Log-in Successful");
	                    window.location = "creativewebdesign.php";
	                </script>
				<?php
			} 



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
	<link rel="stylesheet" type="text/css" href="css/try.css?1422585377">

	<!-- Symbol -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>



<body>
		<div class="container-login100">
			<div class="wrap-login100">
				
				<div class="row" style="height: 500px">
  					<div class="column">
						<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
							<!-- LOGO -->
							<div class="text-center">
							  <img src="images\pnglogo.png" width ="200" height="200">
							</div>
					</div>
						
						<!-- Label -->
					<div class="column">
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
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
