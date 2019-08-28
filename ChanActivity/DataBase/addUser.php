<?php
	require ('config/config.php');
	require ('config/dbConnection.php');

	#Check submit
	if(isset($_POST['submit'])){
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
		$lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
    	$password = mysqli_real_escape_string($conn, $_POST['password']);
    	$age = mysqli_real_escape_string($conn, $_POST['age']);

	#Query
	$query = "INSERT INTO users(username, firstName, lastName, email, password, age) 
				VALUES ('$username', '$firstName', '$lastName', '$email', '$password', '$age')";

		if (mysqli_query($conn, $query)) {
			header('Location:'.ROOT_URL.'');
		}else {
			echo 'Error:' .mysqli_error($conn);
		}
	}


?>

	<?php 
		include('inc/header.php')
	?>

	<div class = "jumbotron">
		<div class="container col-lg-5">
			<h1 style="font-family: 'Impact'; text-align: center;">New Users</h1>
			<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
				<br>
				<div>
					<label>First Name</label>
					<input type="name" name="firstName" class="form-control">
				</div>

				<div>
					<label>Last Name</label>
					<input type="name" name="lastName" class="form-control">
				</div>

				<div>
					<label>Age</label>
					<input type="age" name="age" class="form-control">
				</div>

				<div>
					<label>Email</label>
					<input type="email" name="email" class="form-control">
				</div>

				<div>
					<label>Username</label>
					<input type="name" name="username" class="form-control">
				</div>

				<div>
					<label>Password</label>
					<input type="password" name="password" class="form-control">
				</div>

				<br>
				<div style = "text-align:right";>
					<input type="submit" name="submit" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>

	<?php 
		include('inc/footer.php')
	?>



