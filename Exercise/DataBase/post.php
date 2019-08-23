<?php
	require ('config/config.php');
	require ('config/dbConnection.php');

	#Get ID
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	#Create Query
	$query = 'SELECT * FROM users WHERE id =' .$id;

	#get result
	$result = mysqli_query($conn, $query);

	#Fetch data
	$users = mysqli_fetch_assoc($result);
	print_r($users);

	#Check submit                 
	if(isset($_POST['delete'])){
		#Get Form data
		$delete_id = $_POST['delete_id'];
		$userName = mysqli_real_escape_string($conn,$_POST['userName']);
		$firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
		$lastName = mysqli_real_escape_string($conn,$_POST['lastName']);

	#Query
	$query = "DELETE FROM users WHERE id = {$delete_id}";

		if (mysqli_query($conn, $query)) {
			header('Location:'.ROOT_URL.'');
		}else {
			echo 'Error:' .mysqli_error($conn);
		}
			#Close Connection
		mysqli_close($conn);
	}


	// #Free result
	// mysqli_free_result($result);


?>

	<?php 
		include('inc/header.php')
	?>

	<div class = "jumbotron">
		<h1 style="font-family: 'Impact'; text-align: center;">Users</h1>

		<div class="container" style="background: #cccccc; text-align: center;">
			<h3><?php echo $users['userName']; ?></h3>
			<h4>
				User's Details: <?php echo $users['firstName'];?>
								<?php echo $users['lastName'];?>
			</h4>
			<small> Created On <?php echo $users['date'];?></small>

			<br>
			<form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<input type="hidden" name="delete_id" value="<?php echo $users['id']; ?>">
				<input type="submit" name="delete" value="delete" class="btn btn-danger">
			</form>

				<a href="editpost.php?id=<?php echo $users['id'];?>" class="btn btn-danger">Edit</a>
				<a class="btn btn-success" href="index.php">Back</a>

			<br>
			<hr class="my-4">
		</div>
	</div>

	<?php 
		include('inc/footer.php')
	?>



</body>
</html>

