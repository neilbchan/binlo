<?php
	require ('config/config.php');
	require ('config/dbConnection.php');

	#Create Query
	$query = 'SELECT * FROM users';

	#get result
	$result = mysqli_query($conn, $query);

	#Fetch data
	$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
		<?php
			foreach ($users as $user):
		?>
			<div class="container" style="background: #cccccc; text-align: center;">
				<h3><?php echo $user['userName']; ?></h3>
				<small> Created On <?php echo $user['date'];?></small>
				<br>
				<a class="btn btn-primary" href="post.php?id=<?php echo $user['id'];?>">Readmore</a>
				<br>
				<hr class="my-4">
			</div>
		<?php endforeach;?>
	</div>


</body>
</html>

