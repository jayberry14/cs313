<?php
    session_start();
    try {
        require "dbConnect.php";
        $db = get_db();
    } catch (Exception $e) {
        exit;
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login Required</title>
    <link rel="icon" type="image/ico" href="https://web.byui.edu/mybyui/img/header/byui_logo.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='directory.css'>
    <script>
			// prevents refresh from submitting form and clears out unneeded variables
            // Thank you Brother Birch for this section of JS!
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
    </script>
</head>
<body>
    <header>
        <div class="container-fluid bg-3">
            <img src="https://web.byui.edu/mybyui/img/header/byui_logo.png" class="img-3" width="82" height="82" alt="BYU-IDAHO in white letters on black background" />
            <h1>Ride Share</h1>
        </div>
    </header>

    <div class="container-fluid row squish-center" style="height:50vw">
        <div class="col-lg-6">
            <h2>Rider Login</h2>
            <form action="ridesharelogin.php" method="post" style="max-width:100%">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="username" class="form-control" id="usernameLogin" placeholder="Enter username" name="usernameLogin">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwdLogin" placeholder="Enter password" name="pwdLogin">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
                <button type="submit" name="login" id="login" class="btn btn-default">Login</button>
            </form>
        </div>
        
        <div class="col-lg-6">
            <h2>Create an Account</h2>
            <form action="rideshareregister.php" method="post" style="max-width:100%">
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="fname" class="form-control" id="fname" placeholder="First name" name="fname">
                </div>
                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="lname" class="form-control" id="lname" placeholder="Last name" name="lname">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="phone" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
                </div>
                <div class="form-group">
                    <label for="username">User Name:</label>
                    <input type="username" class="form-control" id="username" placeholder="Enter username" name="username">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="remember">Remember me</label>
                </div>
                <button type="submit" id="create" name="create" class="btn btn-default">Create!</button>
            </form>
        </div>
    </div>
</body>
<footer class="container-fluid bg-3">
    <h4>Copyright ©2019 Brigham Young University - Idaho</h4>
</footer>
</html>