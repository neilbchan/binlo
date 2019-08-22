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


	#Free result
	mysqli_free_result($result);

	#Close Connection
	mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>User Account</title>
</head>
<body>
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
			<a class="btn btn-success" href="index.php">Back</a>
			<br>
			<hr class="my-4">
		</div>
	</div>


</body>
</html>

