<?php

	require ('config/config.inc.php');


	#Check submit
	if (isset($_POST['submit'])) {
		$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$contact = mysqli_real_escape_string($conn, $_POST['contact']);

	#Query
	$query = "INSERT INTO users (users_firstname, users_lastname, users_email, users_username, users_password, users_contact) 
			VALUES ('$firstname', '$lastname', '$email', '$username', '$password', '$contact')";

	$sql_username = "SELECT * FROM users WHERE users_username = '$username'";

	$sql_email = "SELECT * FROM users WHERE users_email = '$email'";

	$res_username = mysqli_query($conn, $sql_username);
	$res_email = mysqli_query($conn, $sql_email);


		if(mysqli_num_rows($res_username) > 0){

			?>
                <script type="text/javascript">
                    alert("Username already taken");
                    window.location = "signup.php";
                </script>
			<?php

		}elseif(mysqli_num_rows($res_email) > 0){

			?>
                <script type="text/javascript">
                    alert("Email already taken");
                    window.location = "signup.php";
                </script>
			<?php		

		}else {
			$insert = mysqli_query($conn, $query);

			?>
                <script type="text/javascript">
                    alert("Register Succesful");
                    window.location = "index.php";
                </script>
			<?php
			exit();
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- try.css -->
	<link rel="stylesheet" type="text/css" href="css/try.css?v=1.1">

</head>
<body>


	<div class="container-login100">
		<div class="wrap-login100">

			<span class="login100-form-title"  style="margin-top: -35px">
				Sign up
			</span>

			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
				<!-- Firstname inputbox -->
				<div class="wrap-input100">
					<input class="input100" type="text" placeholder="Firstname" name="firstname" required>
				</div>
					  	
				<!-- Lastname inputbox -->
				<div class="wrap-input100">
					<input class="input100" type="text" placeholder="Lastname" name="lastname" required>
				</div>

				<!-- Username inputbox -->
				<div class="wrap-input100">
					<input class="input100" type="username" placeholder="Username" name="username" required>
				</div>
					  	
				<!-- Password inputbox -->
				<div class="wrap-input100">
					<input class="input100" type="password" placeholder="Password" name="password" required>
				</div>

				<!-- Email inputbox -->
				<div class="wrap-input100">
					<input class="input100" type="Email" placeholder="Email" name="email" required>
				</div>
					  	
				<!-- Contact inputbox -->
				<div class="wrap-input100">
					<input class="input100" type="Contact" placeholder="Contact" name="contact" required>
				</div>

				<!-- Submit button -->
				<div style="width: 100%; margin-top: 40px">	
					<button class="button button4" type="submit" name="submit"><b>Submit<b></button>
				</div>
				<br>
			</form>
		</div>
	</div>
</body>
</html>