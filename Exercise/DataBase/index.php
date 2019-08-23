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

	<?php 
		include('inc/header.php')
	?>

	<div class = "jumbotron">
		<h1 style="font-family: 'Impact'; text-align: center;">Users</h1>
		<?php
			foreach ($users as $user):
		?>
			<div class="container" style="background: #cccccc; text-align: center;">
				<h3><?php echo $user['userName']; ?></h3>
				<small> Created On <?php echo $user['date'];?></small>
				<br>
				<a class="btn btn-primary" href="post.php?id=<?php echo $user['id'];?>">Read More</a>
				<br>
				<hr class="my-4">
			</div>
		<?php endforeach;?>
	</div>

	<?php 
		include('inc/footer.php')
	?>

</body>
</html>

