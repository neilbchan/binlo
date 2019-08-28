<?php
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Birthday = $_POST['Birthday'];
	$Contact = $_POST['Contact'];
	$Address = $_POST['Address'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Get V</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

		<br>
	<br>
	<h1 style="text-align: center">Profile Answer</h1>
	<br>
	<br>

<div class="container">

	<table class="table table-hover">
  		<thead>
    		<tr>
      			<th scope="col"></th>
      			<th scope="col">Details</th>
    		</tr>
  		</thead>

  	<tbody>
    	<tr>
      		<th scope="row">First Name</th>
     		<td> <?php echo $FirstName?> </td>
    	</tr>

    	<tr>
      		<th scope="row">Last Name</th>
     		<td> <?php echo $LastName?> </td>
    	</tr>

    	<tr>
      		<th scope="row">Birthday</th>
      		<td colspan="2"> <?php echo $Birthday?> </td>
    	</tr

        <tr>
      		<th scope="row">Contact</th>
      		<td colspan="2"> <?php echo $Contact?> </td>
    	</tr>

        <tr>
      		<th scope="row">Address</th>
      		<td colspan="2"> <?php echo $Address?> </td>
    	</tr>

  	</tbody>
	</table>

		<br>
		<br>
<!--   		<button type="submit" name="Submit" class="btn btn-primary">Submit</button> -->
	<button onclick="index.php;"> Back </button>
	
</div>



<!-- 	<?php
	if(isset($_POST['Submit'])){

		$FirstName = htmlentities($_GET['FirstName']);?>
		$name = htmlentities($_GET['name']);?>
		$name = htmlentities($_GET['name']);?>
		$name = htmlentities($_GET['name']);?>

	<h1
		style = "color: red">
		<?php echo "{$FirstName}'s Profile"; ?>
	</h1>
	
	<?php	
	}?> -->

</body>
</html>