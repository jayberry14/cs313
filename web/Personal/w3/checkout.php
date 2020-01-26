<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Josh's Assignment Directory</title>
    <link rel="icon" type="image/ico" href="https://cdn3.iconfinder.com/data/icons/round-icons-vol-2/512/j-512.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='directory.css'>
    </head>
    <?php
        $_SESSION["street"];
        $_SESSION["city"];
        $_SESSION["state"];
        $_SESSION["zip"];
    ?>
    <?php
        if(isset($_POST["submit"])){
            $_SESSION["street"] = htmlspecialchars($_POST["street"]);
            $_SESSION["city"] = htmlspecialchars($_POST["city"]);
            $_SESSION["state"] = htmlspecialchars($_POST["state"]);
            $_SESSION["zip"] = htmlspecialchars($_POST["zip"]);
        }
    ?>
    <body>
        <h1>Checkout</h1>
        <form mehtod="post">
            <div class="row">
                <div class="col"></div>
                <div class="col"><label>Street: </label><input type="text" name="street" size="30"><br><br></div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col"><label>City: </label><input type="text" name="city" size="30"><br><br></div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col"><label>State: </label><input type="text" name="state" size="30"><br><br></div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col"><label>Zip: </label><input type="text" name="zip" size="30"><br><br></div>
                <div class="col"></div>
            </div>
            <button type="submit" name="submit">Save Address</button>
        </form>
        <p class="p2"><a href="viewcart.php"><button>Back to Cart</button></a></p>
        <p class="p1"><a href="confrim.php"><button>Place Order</button></a></p>
    </body>
</html>