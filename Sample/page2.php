<?php
	session_start();
	$name = $_SESSION['name'];
	$email = $_SESSION['email'];
	$message = $_SESSION['message'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Session Two</title>
</head>
<body>
	<h5>Thank you <?php echo $name; ?>, You have subscribed with the email <?php echo $email; ?>, This is your message <?php echo $message?></h5>
	<a href="page3.php">Go To Page 3</a>
</body>
</html>