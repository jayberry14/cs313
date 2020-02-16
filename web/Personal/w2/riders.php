<?php
    session_start();
    if ($_SESSION["loggedIn"] != true && $_SESSION["auth"] != 1) {
        header("Location: ridesharelogin.php");
    }

    try {
        require "dbConnect.php";
        $db = get_db();
    } catch (Exception $e) {
        die();
    }

    $_SESSION["id"];
    $_SESSION["location"];
    $_SESSION["destination"];
    $_SESSION["date"];
    $_SESSION["time"];
    $_SESSION["price"];
    $_SESSION["driver_id"];
    $_SESSION["rider_id"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>BYU-I Ride Board</title>
    <link rel="icon" type="image/ico" href="https://web.byui.edu/mybyui/img/header/byui_logo.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
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
    
    <div class="container-fluid" style="height:45vw">
    <div class="row">
        <form action="ridesdisplay.php" method="post">
            <div class="form-group col-lg-6">
                <label for="location">Where from..?</label>
                <select class="form-control" id="location" name="location">
                    <option value="Rexburg">Rexburg</option>
                    <option value="Provo">Provo</option>
                    <option value="Salt Lake City">Salt Lake City</option>
                    <option value="Boise">Boise</option>
                </select>
            </div>
            <div class="form-group col-lg-6">
                <label for="destination">Going to..?</label>
                <select class="form-control" id="destination" name="destination">
                    <option value="Provo">Provo</option>
                    <option value="Rexburg">Rexburg</option>
                    <option value="Salt Lake City">Salt Lake City</option>
                    <option value="Logan">Logan</option>
                </select>
            </div>
            <div class="form-group col-lg-4">
                <label for="time">What time to depart...?</label>
                <input type="text" class="form-control" name="time" placeholder="18:30" id="time">
            </div>
            <div class="form-group col-lg-4">
                <label for="date">What day to depart...?</label>
                <input type="text" class="form-control" name="date" placeholder="02/20/2020" id="date">
            </div>
            <div class="form-group col-lg-4">
                <label for="price">How much to pay...?</label>
                <input type="text" class="form-control" name="price" placeholder="10" id="price">
            </div>
            <br>
            <button type="submit" class="btn btn-default squish-center" id="search" name="search">Submit Search</button>
        </form>
    </div>
    </div>
</body>

<footer class="container-fluid bg-3">
    <h4>Copyright ©2019 Brigham Young University - Idaho</h4>
</footer>
</html>
