<?php
	require ('config/config.php');
	require ('config/dbConnection.php');

	#Check submit
	if(isset($_POST['submit'])){
		$userName = mysqli_real_escape_string($conn,$_POST['userName']);
		$firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
		$lastName = mysqli_real_escape_string($conn,$_POST['lastName']);

	#Query
	$query = "INSERT INTO users(userName, firstName, lastName) VALUES ('$userName', '$firstName', '$lastName')";

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
		<h1 style="font-family: 'Impact'; text-align: center;">New Users</h1>
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<br>
			<br>
			<div class="text-center" >
				<label>Username</label>
				<input type="name" name="userName" class="=form-control">
			</div>

			<div class="text-center">
				<label>First Name</label>
				<input type="name" name="firstName" class="=form-control">
			</div>

			<div class="text-center">
				<label>Last Name</label>
				<input type="name" name="lastName" class="=form-control">
			</div>

			<br>
			<div class="text-center">
				<input type="submit" name="submit" class="btn btn-primary">
			</div>
		</form>
		
	</div>

	<?php 
		include('inc/footer.php')
	?>



