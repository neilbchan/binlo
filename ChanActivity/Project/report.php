<?php
	require ('config/config.inc.php');

	#Check submit
	// if (isset($_POST['submit'])) {
	// 	$instructorOne = mysqli_real_escape_string($conn, $_POST['iqone']);
	// 	$instructorTwo = mysqli_real_escape_string($conn, $_POST['iqtwo']);
	// 	$instructorThree = mysqli_real_escape_string($conn, $_POST['iqthree']);
	// 	$instructorFour = mysqli_real_escape_string($conn, $_POST['iqfour']);
	// 	$instructorFive = mysqli_real_escape_string($conn, $_POST['iqfive']);
	// 	$instructorSix = mysqli_real_escape_string($conn, $_POST['iqsix']);

	$query = "SELECT * FROM evaluation";
  	$result = mysqli_query($conn, $query);
  	$all = mysqli_fetch_array($result);
	// print_r($all['1']);
?>





<!DOCTYPE html>
<html>
<head>

	<!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- try.css -->
	<link rel="stylesheet" type="text/css" href="css/try.css?v=1.1">

	        <script>
                function goBack() {
                window.history.back();
            }
            </script>

	<title>Report</title>
</head>
<body>

		<br>
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <div class="container-fluid" style="background: linear-gradient(to left, #e9d362, #333333); border-radius: 25px;";>

                  <button type="button" onclick="goBack()" class="btn btn-secondary btn-lg" >Back</button>

                    <h2>Report</h2>

                    <div>
                        <img src="images/pnglogo.png" alt="IMG" width="70px">
                    </div>
                </div>
            </nav>
            <br>
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
					<label style="padding-right: 5px"><?php echo $all['1']; ?></label>

					</td
			    </tr>

			    <tr>
				    <th scope="row">Does s/he carry himself well? Is s/he well groomed and properly attired?</th>
				    <td>
				    	<div class="radio">
					<label style="padding-right: 5px"><?php echo $all['2']; ?></label>

				    	</div>
					</td>
			    </tr>

			    <tr>
			      	<th scope="row">Does s/he have clear audible voice?</th>
			      	<td>
				        <div class="radio">
					<label style="padding-right: 5px"><?php echo $all['2']; ?></label>

		                </div>
	            	</td>
			    </tr>

			    <tr>
			      	<th scope="row">Does s/he attend classes regularly?</th>
			      	<td>
				        <div class="radio">
					<label style="padding-right: 5px"><?php echo $all['3']; ?></label>

		                </div>
	            	</td>
			    </tr>

			    <tr>
			      	<th scope="row">Does s/he move around to assist each student during activities/laboratory?</th>
			      	<td>
				        <div class="radio">
					<label style="padding-right: 5px"><?php echo $all['4']; ?></label>

		                </div>
	            	</td>
			    </tr>

			    <tr>
			        <th scope="row">Does s/he accommodate participants' questions patiently?</th>
			      	<td>
				        <div class="radio">
					<label style="padding-right: 5px"><?php echo $all['5']; ?></label>

		                </div>
	            	</td>
			    </tr>
			  </tbody>
			</table>
			</div>


  

</body>
</html>