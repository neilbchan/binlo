<!-- <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Login</title>

	<style>body{
		background-image: url("Pic/plants.jpg");
		background-repeat: no-repeat;
		background-size: 99.90%;
		background-position: center; 
	} </style>
</head>
<body>
	<br>
	<br>
	
	<div class="container col-lg-4">
		
		<form class="form-signin"  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

			<div class="text-center">
			  <img src="Pic\Capture.jpg" width ="200" height="200">
			</div>
				
				<br>
			  	<br>
			  	<br>
			  	<label for="username" class="sr-only">Email address</label>
			  	<input type="username" id="username" class="form-control" placeholder="Username" name="username" required autofocus>
			  	
			  	<label for="inputPassword" class="sr-only">Password</label>
			  	<input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
			 	<br>
			 <div>	
			 	<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Log in</button>
			  	<a href="addUser.php" class="btn btn-lg btn-primary btn-block">Register</a>
			</div>
		</form>
	</div>

</form>

	</div>
</body>
</html> -->




<?php
   	require ('config/config.php');
	require ('config/dbConnection.php');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['userName']);
      $mypassword = mysqli_real_escape_string($db,$_POST['passWord']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="addUser.php">Sign up now</a>.</p>
        </form>
    </div>    
</body>
</html>