<?php

session_start();

if (isset($_POST['submit'])) {

	include 'config.inc.php';

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);


	if(empty($username) || empty($password)) {
		header("Location: index.php")
		exit()
	}else{
		$sql = "SELECT * FROM users WHERE users_username = '$username'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1){
			header("Location: index.php")
			exit()
		}else{
			if($row = mysqli_fetch_assoc($result)) {
				// echo $row['user_username'];
				//De-hashing pass
				$hashedPwdCheck = password_verify($password, $row['users_password'])
				if($hashedPwdCheck == false){
					header("Location: index.php?Login=invalid")
					exit()
				}elseif ($hashedPwdCheck == true) {
					//Login to next page
					$_SESSION['u_first'] = $row['users_firstname'];
					$_SESSION['u_last'] = $row['users_lastname'];
					header("Location: ../index.php?login=success")
					exit()
				}
			}
		}
	}
}else{
	header("Location: index.php")
	exit()
}