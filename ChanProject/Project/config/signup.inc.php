<?php

	if (isset($_POST['submit'])) {
		
		include_once 'config.inc.php';

		$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$contact = mysqli_real_escape_string($conn, $_POST['contact']);

		//Error handlers
		//Check for empty fields
		if (empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password) || empty($contact)) {
			//Go to signup.php, display empty, exit
			header("Location: ../signup.php?signup=empty");
			exit()
		}else{
			//Check if inpute characted are valid
			if(!preg_match("/^[a-zA-Z]*$/", $firstname || !preg_match("/^[a-zA-Z]*$/", $lastname)){
				//Go to signup.php, display invalid, exit
				header("Location: ../signup.php?signup=invalid");
				exit()
			//If signup credentials are valid go here	
			}else{
				//Check if  email is valid
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					header("Location: ../signup.php?signup=invalid email");
					exit()
				}else{
					$sql = "SELECT * FROM users WHERE users_username='$username'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if($resultCheck > 0) {
						header("Location: ../signup.php?signup=User is already taken");
						exit();
					}else{
//SIGN UP SQL===================================================================================================================================================
						//Hasing the password
						$hashedPass = password_hash($password,PASSWORD_DEFAULT);
						//Insert the user into the database
						$sql = "INSERT INTO users (users_firstname, users_lastname, users_email, users_username, users_password, users_contact) 
								VALUES ('$firstname', '$lastname', '$email', '$username', '$password', '$contact')";
						mysqli_query($conn, $sql);
						header("Location: ../signup.php?signup=success");
						exit()
					}
				}
			}
		}

	}

	else {
		//Go to signup.php, exit
		header("Location: ../signup.php");
		exit();
	}


	?>