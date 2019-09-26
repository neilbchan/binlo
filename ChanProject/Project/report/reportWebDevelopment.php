<?php
	require ('../config/config.inc.php');

	#Check submit
	// if (isset($_POST['submit'])) {
	// 	$instructorOne = mysqli_real_escape_string($conn, $_POST['iqone']);
	// 	$instructorTwo = mysqli_real_escape_string($conn, $_POST['iqtwo']);
	// 	$instructorThree = mysqli_real_escape_string($conn, $_POST['iqthree']);
	// 	$instructorFour = mysqli_real_escape_string($conn, $_POST['iqfour']);
	// 	$instructorFive = mysqli_real_escape_string($conn, $_POST['iqfive']);
	// 	$instructorSix = mysqli_real_escape_string($conn, $_POST['iqsix']);

	if(isset($_POST['deleteInstructor'])){
		$queryDeleteInstructor = "UPDATE instructor SET evaInstructorOne = '0', evaInstructorTwo = '0', evaInstructorThree = '0', evaInstructorFour = '0', evaInstructorFive = '0', evaInstructorSix = '0' WHERE instructor_id = 1";
		$resultDeleteInstructor = mysqli_query($conn, $queryDeleteInstructor);

			?>
	            <script type="text/javascript">
	                alert("Delete Successful");
	                window.location = "creativewebdesign.php";
	            </script>
			<?php
	}

	$queryInstructor = "SELECT * FROM instructor WHERE instructor_course = 'WebDevelopment'";
  	$resultInstructor = mysqli_query($conn, $queryInstructor);
  	$allInstructor = mysqli_fetch_array($resultInstructor);

	$queryTraining = "SELECT * FROM training WHERE training_course = 'WebDevelopment'";
  	$resultTraining = mysqli_query($conn, $queryTraining);
  	$allTraining = mysqli_fetch_array($resultTraining);

	$queryCenter = "SELECT * FROM center WHERE center_course = 'WebDevelopment'";
  	$resultCenter = mysqli_query($conn, $queryCenter);
  	$allCenter = mysqli_fetch_array($resultCenter);
?>





<!DOCTYPE html>
<html>
<head>

	<!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- try.css -->
	<link rel="stylesheet" type="text/css" href="../css/try.css?v=1.1">

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

                    <h2>Web Development</h2>

                    <div>
                        <img src="../images/pnglogo.png" alt="IMG" width="70px">
                    </div>
                </div>
            </nav>
            <br>
            <br>
	

	<div class="container col-lg-8" style="border-style: solid; border-radius: 25px; border-width: 2px; padding-bottom: 20px">
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
			<table class="table table-striped" >
			  <thead>
			    <tr>
			     	<th scope="col" style="font-size: 30px">Instructor</th>
			     	<td scope="col" style="font-size: 25px"><b>Rate</b> (Low to High)</td>
			    </tr>
			  </thead>

			  <tbody>
			  	<tr>
				    <th scope="row">Does s/he start his class on time?</th>
				    <td>
				    	<div class="radio">
					<label style="padding-left: 100px"><?php echo $allInstructor['2']; ?></label>
						</div>
					</td>
			    </tr>

			    <tr>
				    <th scope="row">Does s/he carry himself well? Is s/he well groomed and properly attired?</th>
				    <td>
				    	<div class="radio">
					<label style="padding-left: 100px"><?php echo $allInstructor['3']; ?></label>

				    	</div>
					</td>
			    </tr>

			    <tr>
			      	<th scope="row">Does s/he have clear audible voice?</th>
			      	<td>
				        <div class="radio">
					<label style="padding-left: 100px"><?php echo $allInstructor['4']; ?></label>

		                </div>
	            	</td>
			    </tr>

			    <tr>
			      	<th scope="row">Does s/he attend classes regularly?</th>
			      	<td>
				        <div class="radio">
					<label style="padding-left: 100px"><?php echo $allInstructor['5']; ?></label>

		                </div>
	            	</td>
			    </tr>

			    <tr>
			      	<th scope="row">Does s/he move around to assist each student during activities/laboratory?</th>
			      	<td>
				        <div class="radio">
					<label style="padding-left: 100px"><?php echo $allInstructor['6']; ?></label>

		                </div>
	            	</td>
			    </tr>

			    <tr>
			        <th scope="row">Does s/he accommodate participants' questions patiently?</th>
			      	<td>
				        <div class="radio">
					<label style="padding-left: 100px"><?php echo $allInstructor['7']; ?></label>

		                </div>
	            	</td>
			    </tr>
			  </tbody>

			</table>

			<div style="text-align: center;">
				<button type="submit" name="deleteInstructor" style="background: #FF6F00 ; border-radius: 8px; height: 50px; width: 200px; font-size: 20px">Delete Instructor</button>
			</div>
		</form>
	</div>


	<br>
	<hr style="border-radius: 5px; width: 1100px; height: 10px; background: linear-gradient(to left, #333333, #e9d362)";>
	<br>
	<div class="container col-lg-8" style="border-style: solid; border-radius: 25px; border-width: 2px;">
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
			<table class="table table-striped" >
			  <thead>
			    <tr>
			      	<th scope="col" style="font-size: 30px">Training</th>
			     	<td scope="col" style="font-size: 25px"><b>Rate</b> (Low to High)</td>
			    </tr>
			  </thead>

			  <tbody>
			  	<tr>
				    <th scope="row">Does s/he start his class on time?</th>
				    <td>
				    	<div class="radio">
					<label style="padding-left: 100px"><?php echo $allTraining['2']; ?></label>
						</div>
					</td>
			    </tr>

			    <tr>
				    <th scope="row">Does s/he carry himself well? Is s/he well groomed and properly attired?</th>
				    <td>
				    	<div class="radio">
					<label style="padding-left: 100px"><?php echo $allTraining['3']; ?></label>

				    	</div>
					</td>
			    </tr>

			    <tr>
			      	<th scope="row">Does s/he have clear audible voice?</th>
			      	<td>
				        <div class="radio">
					<label style="padding-left: 100px"><?php echo $allTraining['4']; ?></label>

		                </div>
	            	</td>
			    </tr>

			    <tr>
			      	<th scope="row">Does s/he attend classes regularly?</th>
			      	<td>
				        <div class="radio">
					<label style="padding-left: 100px"><?php echo $allTraining['5']; ?></label>

		                </div>
	            	</td>
			    </tr>

			    <tr>
			      	<th scope="row">Does s/he move around to assist each student during activities/laboratory?</th>
			      	<td>
				        <div class="radio">
					<label style="padding-left: 100px"><?php echo $allTraining['6']; ?></label>

		                </div>
	            	</td>
			    </tr>

			    <tr>
			        <th scope="row">Does s/he accommodate participants' questions patiently?</th>
			      	<td>
				        <div class="radio">
					<label style="padding-left: 100px"><?php echo $allTraining['7']; ?></label>

		                </div>
	            	</td>
			    </tr>
			  </tbody>

			</table>
		</form>
	</div>

	<br>
	<hr style="border-radius: 5px; width: 1100px; height: 10px; background: linear-gradient(to left, #333333, #e9d362)";>
	<br>
	<div class="container col-lg-8" style="border-style: solid; border-radius: 25px; border-width: 2px;">
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
			<table class="table table-striped" >
			  <thead>
			    <tr>
			        <th scope="col" style="font-size: 30px">Center</th>
			        <td scope="col" style="font-size: 25px"><b>Rate</b> (Low to High)</td>
			    </tr>
			  </thead>

			  <tbody>
			  	<tr>
				    <th scope="row">Does s/he start his class on time?</th>
				    <td>
				    	<div class="radio">
					<label style="padding-left: 100px"><?php echo $allCenter['2']; ?></label>
						</div>
					</td>
			    </tr>

			    <tr>
				    <th scope="row">Does s/he carry himself well? Is s/he well groomed and properly attired?</th>
				    <td>
				    	<div class="radio">
					<label style="padding-left: 100px"><?php echo $allCenter['3']; ?></label>

				    	</div>
					</td>
			    </tr>

			    <tr>
			      	<th scope="row">Does s/he have clear audible voice?</th>
			      	<td>
				        <div class="radio">
					<label style="padding-left: 100px"><?php echo $allCenter['4']; ?></label>

		                </div>
	            	</td>
			    </tr>

			    <tr>
			      	<th scope="row">Does s/he attend classes regularly?</th>
			      	<td>
				        <div class="radio">
					<label style="padding-left: 100px"><?php echo $allCenter['5']; ?></label>

		                </div>
	            	</td>
			    </tr>

			    <tr>
			      	<th scope="row">Does s/he move around to assist each student during activities/laboratory?</th>
			      	<td>
				        <div class="radio">
					<label style="padding-left: 100px"><?php echo $allCenter['6']; ?></label>

		                </div>
	            	</td>
			    </tr>

			    <tr>
			        <th scope="row">Does s/he accommodate participants' questions patiently?</th>
			      	<td>
				        <div class="radio">
					<label style="padding-left: 100px"><?php echo $allCenter['7']; ?></label>

		                </div>
	            	</td>
			    </tr>
			  </tbody>

			</table>
		</form>
	</div>


  

</body>
</html>