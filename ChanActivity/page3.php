<?php
	session_start();

	$name = $_SESSION['name'];
	$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Session Three</title>
</head>
<body>
	<h1>Hello <?php echo $name; ?></h1>
</body>
</html>