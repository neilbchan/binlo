<?php
	session_start();
	$name = $_SESSION['inputName'];
	$email = $_SESSION['inputEmail'];
	$username = $_SESSION['inputUsername'];
	$password = $_SESSION['inputPassword'];
	$comment = $_SESSION['inputComment'];
	$gender = $_SESSION['inputGender'];
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">

	<title>Second Page</title>

	<style>
		body{
			/*background: auto*/
			background-position: right;
			background-repeat: no-repeat;
			background-image: url("Pic/bg.jpg");
			padding-top: 131px;
		}
	</style>
</head>
<body>



<div class="container col-lg-6" style="bottom: 100px; font-family: Lora;">

<br>
<br>
<div class = "text-center">
  <h2>Your Input</h2>
</div>
<br>
<br>

	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th scope="col">Details</th>
	      <th scope="col">Information</th>
	    </tr>
	  </thead>

	  <tbody>
	    <tr>
	      <th scope="row">Name</th>
	      <td><?php echo $name; ?></td>
	    </tr>

	    <tr>
	      <th scope="row">Email</th>
	      <td><?php echo $email; ?></td>
	    </tr>

	    <tr>
	      <th scope="row">Username</th>
	      <td><?php echo $username; ?></td>
	    </tr>

	   	<tr>
	      <th scope="row">Password</th>
	      <td><?php echo $password; ?></td>
	    </tr>

	    <tr>
	      <th scope="row">Comment</th>
	      <td><?php echo $comment; ?></td>
	    </tr>

	    <tr>
	      <th scope="row">Gender</th>
	      <td><?php echo $gender; ?></td>
	    </tr>
	  </tbody>

	</table>
</div>

</body>
</html>