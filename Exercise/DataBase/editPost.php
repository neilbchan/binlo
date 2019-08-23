<?php
	require ('config/config.php');
	require ('config/dbConnection.php');

	#Get ID
	$id = mysqli_real_escape_string($conn, $_GET['id']);
	#Create Query
	$query = 'SELECT * FROM users WHERE id = '.$id;
	#Get Result
	$result = mysqli_query($conn, $query);
	#Fetch data
	$users = mysqli_fetch_assoc($result);

	#Check submit
	if(isset($_POST['submit'])){
		#Get Form data
		$id = $users['id'];
		$userName = mysqli_real_escape_string($conn,$_POST['userName']);
		$firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
		$lastName = mysqli_real_escape_string($conn,$_POST['lastName']);

	#Query
	$query = "UPDATE users SET username = '$userName', firstName='$firstName', lastName='lastName' WHERE id = {$id}";

		if (mysqli_query($conn, $query)) {
			header('Location:'.ROOT_URL.'');
		}else {
			echo 'Error:' .mysqli_error($conn);
		}
	}


	mysqli_free_result($result);
	mysqli_close($conn);


?>

	<?php 
		include('inc/header.php')
	?>

	<div class = "jumbotron">
		<h1 style="font-family: 'Impact'; text-align: center;">Add Users</h1>
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div>
				<label>Username</label>
				<input type="name" name="userName" class="=form-control" value="<?php echo $users['userName'];?>">
				
			</div>

			<div>
				<label>First Name</label>
				<input type="name" name="firstName" class="=form-control" value="<?php echo $users['firstName'];?>">
			</div>

			<div>
				<label>Last Name</label>
				<input type="name" name="lastName" class="=form-control" value="<?php echo $users['lastName'];?>">
			</div>

			<br>
			<input type="submit" name="submit" class="btn btn-primary">
		</form>
		
	</div>

	<?php 
		include('inc/footer.php')
	?>



