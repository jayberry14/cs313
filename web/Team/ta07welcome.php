<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>W07 Welcome Page</title>
</head>
<body>
    <div>
        <h1 class="centered">Welcome Page!</h1>
        <div class="row p-3">
            <div class="col">
                <form action="ta07authenticate.php" method="POST" class="container">
                    <h3 class="centered">Login</h3>
                    <div class="form-row">
                        <label for="username">Username:</label>
                        <input class="form-control" type="text" name="username" id="username" required>
                    </div>
                    <div class="form-row">
                        <label for="password">Password:</label>
                        <input class="form-control" type="password" name="password" id="password" required>
                    </div>
                    <br>
                    <div class="text-center">
                        <input type="submit" value="Login" class="btn btn-primary" name="loginButton">
                    </div>
                </form>
            </div>
            <div class="col">
                <form action="ta07insert.php" method="post" class="container">
                    <h3 class="centered">Create New User</h3>
                    <div class="form-row">
                        <label for="username">Username:</label>
                        <input class="form-control" type="text" name="username" id="username" required>
                    </div>
                    <div class="form-row">
                        <label for="password">Password:</label>
                        <input class="form-control" type="password" name="password" id="password" required>
                        <?php
                            if (isset($_GET["alphaNumError"])) { ?>
                                <p style="color: red"><?php echo "Password must contain at least 1 number!"?></p>
                           <?php } ?>
                           <?php
                            if (isset($_GET["lengthError"])) { ?>
                                <p style="color: red"><?php echo "Password must be at least 7 characters!"?></p>
                           <?php } ?>
                    </div>
                    <div class="form-row">
                        <label for="confirmPassword">Confirm Password:</label>
                        <input class="form-control" type="password" name="confirmPassword" id="password" required>
                        <?php
                            if (isset($_GET["confirmError"])) { ?>
                                <p style="color: red"><?php echo "Password must match!"?></p>
                           <?php } ?>
                    </div>
                    <br>
                    <div class="text-center">
                        <input type="submit" value="Register" class="btn btn-primary" name="registerButton">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>