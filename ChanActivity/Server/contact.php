

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="nav-header">
				<a class="navbar-brand" href="#">My Website</a>
			</div>
		</div>

	</nav>
	<div class="container">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

		<div class = "form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="">
		</div>

		<div class ="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control" value="">
		</div>

		<div class = "form-group">
			<label>Messages</label>
			<textarea class="form-control"></textarea>
		</div>

		<br>
		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>