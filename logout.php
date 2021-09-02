<?php  
	session_start();
	session_destroy();

	// if(isset($_SESSION['username'])){

	// 	unset($SESSION['username']);
	// }

	header("Location:user_login.php");
die;