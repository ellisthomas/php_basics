<?php
require_once('config.php');

$username = 'username';
$password = 'password';
	

// Login 

 
// if login button is clicked 

		if (isset($_POST['login'])) {

			$username = $_POST['username'];
			$password = $_POST['password'];

		}else {
			$username = "Help!";
		}

			$sql = "SELECT * users WHERE username = '$username' limit 1"; 


			// echo "Welcome back, " . $_SESSION['username'];
			header("Location: index.php");

		// if ($_POST[$username] == "username" && $_POST[$password] == 'password'){

		// 	$_SESSION[$username] == 'username';
		
		// } else {

		// 	echo 'Errors found';
		// }

			// }	
		
		mysqli_close($db);



			
