<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="styles.css">
<!-- Login form -->
<div class="container">
    <div class="login-box">
        <div class="row">
            <div class="col-md-6 offset-lg-3">
                <h1>Login</h1>
                <form action="login.php" method="POST">
                    <p>Please fill in your credentials to login</p>
                    <hr class="mb-3">
                    <label for="username"><b>Username</b></label>
                    <input class="form-control" type="text" name="username" autofocus="">
                    <label for="password"><b>Password</b></label>
                    <input class="form-control" type="password" name="password">
                    <hr class="mb-3">
                    <!-- Submit button for login  -->
                    <input class="btn btn-primary" type="submit" id="login" name="login" value="Login">
                    <br><br>
                    <a href="registration.php">Click here to register</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Login form -->