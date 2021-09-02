<?php
require_once('config.php');

$username = 'username';
$password = 'password';


// if register button is clicked 

		if (isset($_POST['sign_up'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
		

// insert data from input fields in the database

			$sql = "INSERT INTO users (username, password ) VALUES('$_POST[username]', '$_POST[password]')";
			
			if (mysqli_query($db,$sql)){

				echo 'Successfully Saved!';
				header("Location: index.php");

			} else {
				echo 'There were errors saving!';
			}		
		}
		
		mysqli_close($db);



			
