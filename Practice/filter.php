<?php
	#Check for posted data
	// if (filter_has_var(INPUT_POST, 'data')) {
	// 	echo "Data Found!";
	// } else {
	// 	"No Data Found!";
	// }

	// $email = $_POST['data'];
	// #remove illegal characters
	// $email = filter_var($email, FILTER_SANITIZE_EMAIL);
	// echo $email;

	// if(filter_var($email, FILTER_VALIDATE_EMAIL)){
	// 	echo "Email is valid! ";
	// } else {
	// 	echo "Email is NOT valid! ";
	// }

	// $var = 23;
	// if(filter_var($var,FILTER_VALIDATE_INT)){
	// 	echo $var."is a number ";
	// } else $var."is NOT a number! ";

	// $var = "alskjdsalkdjasdlksajd;123213123213 ";
	// var_dump(filter_var($var,FILTER_SANITIZE_NUMBER_INT));
	// 	// echo $var;
		$var = 'alskjdsalkdjasdlksajd<script>alert(1)</script>123213423423';
		echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Webpage</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="data">
		<button type="submit">Submit</button>
		<br>
		<br>
		<br>
		<input type="text" name="data">
		<button type="submit">Submit</button>
	</form>
</body>
</html>