<!DOCTYPE html>
<html>
<head>

	<title>Exercise 5</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

	<br>
	<br>
	<h1 style="text-align: center">Learner's Profile</h1>
	<br>
	<br>

<div class="container">

	<form method="POST" action="get_post.php">

  	<div class="form-row">
		<!-- First Name -->
    	<div class="form-group col-md-6">
      		<label for="inputEmail4">First Name</label>
      		<input type="Name" class="form-control" name="FirstName" placeholder="First Name">
  		</div>
		<!-- Last Name -->
    	<div class="form-group col-md-6">
      		<label for="inputPassword4">Last Name</label>
      		<input type="Name" class="form-control" name="LastName" placeholder="Last Name">
    	</div>
		<!-- Birthday -->
    	<div class="form-group col-md-6">
      		<label for="inputEmail4">Birthday</label>
      		<input type="Birthday" class="form-control" name="Birthday" placeholder="Month-Day-Year">
  		</div>
		<!-- Contact -->
    	<div class="form-group col-md-6">
      		<label for="inputPassword4">Contact</label>
      		<input type="Contact" class="form-control" name="Contact" placeholder="Cellphone Number">
    	</div>

  	</div>

  	<div class="form-group">
		<!-- Address -->
    	<label for="inputAddress">Address</label>
    	<input type="text" class="form-control" name="Address" placeholder="Manila">

		<br>
		<br>
  		<button type="submit" name="Submit" class="btn btn-primary">Submit</button>
	</div>

	</form>
</div>


</body>
</html>