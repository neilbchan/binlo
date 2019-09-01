<?php
require ('config/config.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Instructor</title>

	<!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- try.css -->
	<link rel="stylesheet" type="text/css" href="css/try.css">

</head>
<body>

	<br>
	<br>
	<div class="card-body text-center">
        <h1>Instructor</h1>
    </div> 
    <br>
	

	<div class="container col-lg-8" style="border-style: solid; border-radius: 25px; border-width: 2px;">
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
			      		<label style="padding-right: 5px"><input type="radio" name="qone"> 1</label>
			      		<label style="padding-right: 5px"><input type="radio" name="qone"> 2</label>
			      		<label style="padding-right: 5px"><input type="radio" name="qone"> 3</label>
			      		<label style="padding-right: 5px"><input type="radio" name="qone"> 4</label>
			      		<label style="padding-right: 5px"><input type="radio" name="qone"> 5</label>
			    	</div>
				</td>
		    </tr>

		    <tr>
			    <th scope="row">Does s/he carry himself well? Is s/he well groomed and properly attired?</th>
			    <td>
			    	<div class="radio">
			      		<label style="padding-right: 5px"><input type="radio" name="qtwo"> 1</label>
			      		<label style="padding-right: 5px"><input type="radio" name="qtwo"> 2</label>
			      		<label style="padding-right: 5px"><input type="radio" name="qtwo"> 3</label>
			      		<label style="padding-right: 5px"><input type="radio" name="qtwo"> 4</label>
			      		<label style="padding-right: 5px"><input type="radio" name="qtwo"> 5</label>
			    	</div>
				</td>
		    </tr>

		    <tr>
		      	<th scope="row">Does s/he have clear audible voice?</th>
		      	<td>
			        <div class="radio">
	                    <label style="padding-right: 5px"><input type="radio" name="qthree" > 1</label>
	                    <label style="padding-right: 5px"><input type="radio" name="qthree" > 2</label>
	                    <label style="padding-right: 5px"><input type="radio" name="qthree" > 3</label>
	                    <label style="padding-right: 5px"><input type="radio" name="qthree" > 4</label>
	                    <label style="padding-right: 5px"><input type="radio" name="qthree" > 5</label>
	                </div>
            	</td>
		    </tr>

		    <tr>
		      	<th scope="row">Does s/he attend classes regularly?</th>
		      	<td>
			        <div class="radio">
	                    <label style="padding-right: 5px"><input type="radio" name="qfour" > 1</label>
	                    <label style="padding-right: 5px"><input type="radio" name="qfour" > 2</label>
	                    <label style="padding-right: 5px"><input type="radio" name="qfour" > 3</label>
	                    <label style="padding-right: 5px"><input type="radio" name="qfour" > 4</label>
	                    <label style="padding-right: 5px"><input type="radio" name="qfour" > 5</label>
	                </div>
            	</td>
		    </tr>

		    <tr>
		      	<th scope="row">Does s/he move around to assist each student during activities/laboratory?</th>
		      	<td>
			        <div class="radio">
	                    <label style="padding-right: 5px"><input type="radio" name="qfive"> 1</label>
	                    <label style="padding-right: 5px"><input type="radio" name="qfive"> 2</label>
	                    <label style="padding-right: 5px"><input type="radio" name="qfive"> 3</label>
	                    <label style="padding-right: 5px"><input type="radio" name="qfive"> 4</label>
	                    <label style="padding-right: 5px"><input type="radio" name="qfive"> 5</label>
	                </div>
            	</td>
		    </tr>

		    <tr>
		        <th scope="row">Does s/he accommodate participants' questions patiently?</th>
		      	<td>
			        <div class="radio">
	                    <label style="padding-right: 5px"><input type="radio" name="qsix"> 1</label>
	                    <label style="padding-right: 5px"><input type="radio" name="qsix"> 2</label>
	                    <label style="padding-right: 5px"><input type="radio" name="qsix"> 3</label>
	                    <label style="padding-right: 5px"><input type="radio" name="qsix"> 4</label>
	                    <label style="padding-right: 5px"><input type="radio" name="qsix"> 5</label>
	                </div>
            	</td>
		    </tr>
		  </tbody>
		</table>
	</div>
</body>
</html>