<?php
	define('DB_HOST' , 'localhost');
	define('DB_USER' , 'root');
	define('DB_PASS' , '');
	define('DB_NAME',  'project');

	#Create Connection
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if(mysqli_connect_errno()){
		echo 'Failed to connect to MySQL'.mysqli_connect_errno();
	}

	#Check submit
	if (isset($_POST['submit'])) {
		$instructorOne = mysqli_real_escape_string($conn, $_POST['iqone']);
		$instructorTwo = mysqli_real_escape_string($conn, $_POST['iqtwo']);
		$instructorThree = mysqli_real_escape_string($conn, $_POST['iqthree']);
		$instructorFour = mysqli_real_escape_string($conn, $_POST['iqfour']);
		$instructorFive = mysqli_real_escape_string($conn, $_POST['iqfive']);
		$instructorSix = mysqli_real_escape_string($conn, $_POST['iqsix']);

	#Query
	$query = "INSERT INTO instructor (evaInstructorOne, evaInstructorTwo, evaInstructorThree, evaInstructorFour, evaInstructorFive, evaInstructorSix) 
			  VALUES ('$instructorOne', '$instructorTwo', '$instructorThree', '$instructorFour', '$instructorFive', '$instructorSix')";

		if(mysqli_query($conn, $query)) {

		   	header("Location: ../creativewebdesign.php");

		}else {
			echo 'Error:' .mysqli_error($conn);
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Instructor</title>

	<!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- try.css -->
	<link rel="stylesheet" type="text/css" href="css/try.css?v=1.1">

	        <script>
                function goBack() {
                window.history.back();
            }
            </script>

</head>
<body>

	<br>
	<div class="card-body text-center">
        <h1>Instructor</h1>
    </div> 
    <br>
	

	<div class="container col-lg-8" style="border-style: solid; border-radius: 25px; border-width: 2px;">
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
			<table class="table table-striped" >
			  <thead>
			    <tr>
			      <th scope="col">Question</th>
			     <td scope="col"><b>Rate</b> (Low to High)</td>
			    </tr>
			  </thead>

			  <tbody>
			  	<tr>
				    <th scope="row">Does s/he start his class on time?</th>
				    <td>
				    	<div class="radio">
				      		<label style="padding-right: 5px"><input type="radio" name="iqone" value="1"> 1</label>
				      		<label style="padding-right: 5px"><input type="radio" name="iqone" value="2"> 2</label>
				      		<label style="padding-right: 5px"><input type="radio" name="iqone" value="3"> 3</label>
				      		<label style="padding-right: 5px"><input type="radio" name="iqone" value="4"> 4</label>
				      		<label style="padding-right: 5px"><input type="radio" name="iqone" value="5"> 5</label>
				    	</div>
					</td>
			    </tr>

			    <tr>
				    <th scope="row">Does s/he carry himself well? Is s/he well groomed and properly attired?</th>
				    <td>
				    	<div class="radio">
				      		<label style="padding-right: 5px"><input type="radio" name="iqtwo" value="1"> 1</label>
				      		<label style="padding-right: 5px"><input type="radio" name="iqtwo" value="2"> 2</label>
				      		<label style="padding-right: 5px"><input type="radio" name="iqtwo" value="3"> 3</label>
				      		<label style="padding-right: 5px"><input type="radio" name="iqtwo" value="4"> 4</label>
				      		<label style="padding-right: 5px"><input type="radio" name="iqtwo" value="5"> 5</label>
				    	</div>
					</td>
			    </tr>

			    <tr>
			      	<th scope="row">Does s/he have clear audible voice?</th>
			      	<td>
				        <div class="radio">
		                    <label style="padding-right: 5px"><input type="radio" name="iqthree" value="1"> 1</label>
		                    <label style="padding-right: 5px"><input type="radio" name="iqthree" value="2"> 2</label>
		                    <label style="padding-right: 5px"><input type="radio" name="iqthree" value="3"> 3</label>
		                    <label style="padding-right: 5px"><input type="radio" name="iqthree" value="4"> 4</label>
		                    <label style="padding-right: 5px"><input type="radio" name="iqthree" value="5"> 5</label>
		                </div>
	            	</td>
			    </tr>

			    <tr>
			      	<th scope="row">Does s/he attend classes regularly?</th>
			      	<td>
				        <div class="radio">
		                    <label style="padding-right: 5px"><input type="radio" name="iqfour" value="1"> 1</label>
		                    <label style="padding-right: 5px"><input type="radio" name="iqfour" value="2"> 2</label>
		                    <label style="padding-right: 5px"><input type="radio" name="iqfour" value="3"> 3</label>
		                    <label style="padding-right: 5px"><input type="radio" name="iqfour" value="4"> 4</label>
		                    <label style="padding-right: 5px"><input type="radio" name="iqfour" value="5"> 5</label>
		                </div>
	            	</td>
			    </tr>

			    <tr>
			      	<th scope="row">Does s/he move around to assist each student during activities/laboratory?</th>
			      	<td>
				        <div class="radio">
		                    <label style="padding-right: 5px"><input type="radio" name="iqfive" value="1"> 1</label>
		                    <label style="padding-right: 5px"><input type="radio" name="iqfive" value="2"> 2</label>
		                    <label style="padding-right: 5px"><input type="radio" name="iqfive" value="3"> 3</label>
		                    <label style="padding-right: 5px"><input type="radio" name="iqfive" value="4"> 4</label>
		                    <label style="padding-right: 5px"><input type="radio" name="iqfive" value="5"> 5</label>
		                </div>
	            	</td>
			    </tr>

			    <tr>
			        <th scope="row">Does s/he accommodate participants' questions patiently?</th>
			      	<td>
				        <div class="radio">
		                    <label style="padding-right: 5px"><input type="radio" name="iqsix" value="1"> 1</label>
		                    <label style="padding-right: 5px"><input type="radio" name="iqsix" value="2"> 2</label>
		                    <label style="padding-right: 5px"><input type="radio" name="iqsix" value="3"> 3</label>
		                    <label style="padding-right: 5px"><input type="radio" name="iqsix" value="4"> 4</label>
		                    <label style="padding-right: 5px"><input type="radio" name="iqsix" value="5"> 5</label>
		                </div>
	            	</td>
			    </tr>
			  </tbody>
			</table>
			</div>

        <button type="button" onclick="goBack()" class="btn btn-secondary btn-lg" style="margin: 20px; margin-left: 250px; padding-left: 50px; padding-right: 50px">Back</button>
  

        <button onclick="goBack()" class="btn btn-secondary btn-lg" style="margin: 20px; margin-left: 540px; padding-left: 40px; padding-right: 40px; background-color: #4CAF50;" type="submit" name="submit">Submit</button>
		</form>
	</body>
</html>