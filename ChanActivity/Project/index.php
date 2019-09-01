<?php
	include_once 'config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- try.css -->
	<link rel="stylesheet" type="text/css" href="css/try.css">

	<!-- Symbol -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>



<body>
	<div class="container-login100">
		<div class="wrap-login100">
			<form class="form-signin"  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div class="text-center">
				  <img src="images\pnglogo.png" width ="200" height="200">
				</div>
					
					<br>
					<span class="login100-form-title">
						Member Login
					</span>
				 
				  	
				  	<div class="wrap-input100">
				  		<input class="input100" type="username" placeholder="Username" name="username" required autofocus>
				  		<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
				  	</div>
				  	
				  	<div class="wrap-input100">
				  		<input class="input100" type="password" placeholder="Password" name="password" required>
				  		<span class="symbol-input100" style="padding-left: 33px;">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
				 	</div>

				 	<br>
				 <div>	
				 	<button class="button button4" type="submit" name="submit"><b>LOGIN<b></button>
				</div>
				<br>

				<div class="text-center p-t-136">
					<a class="txt2" href="#">
						Create your Account
						<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
					</a>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
