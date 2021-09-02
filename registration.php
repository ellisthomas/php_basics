<?php
	session_start();
	include("process.php");
	require_once('config.php');

	
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>User Registration | PHP</title>
</head>

<body>
    <!-- <div>
    </div> -->
    <!-- Registration form -->
   
        <div class="container">
            <div class="register-box">
                <div class="row">
                    <div class="col-md-6 offset-lg-3">
                    <h1>Registration</h1>
                        <form action="process.php" method="POST">
                            <p>Please fill out this form to create account</p>
                            <hr class="mb-3">
                            <label for="username"><b>Username</b></label>
                            <input class="form-control" type="text" name="username" required="" autofocus="">
                            <!-- discover how to authenicate password and hash it  -->
                            <label for="password"><b>Password</b></label>
                            <input class="form-control" type="password" name="password" required="">
                            <hr class="mb-3">
                            <input class="btn btn-primary" type="submit" id="register" name="sign_up" value="Sign Up"><br><br>
                            <a href="user_login.php">Click here to login</a>
                </form>
                    </div>
                </div>
            </div>
        </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"></script>
</body>

</html>