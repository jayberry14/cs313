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
    <body>
        <h1>Order Confirmation</h1>
        <nav>
            <ul>
                <?php if($_SESSION["shirt"] > 0) { ?>
                    <li># of Shirts: <?=$_SESSION["shirt"]?></li>
                <?php } ?>
                <?php if($_SESSION["slacks"] > 0) { ?>
                    <li># of Slacks: <?=$_SESSION["slacks"]?></li>
                <?php } ?>
                <?php if($_SESSION["sneakers"] > 0) { ?>
                    <li># of Sneakers: <?=$_SESSION["sneakers"]?></li>
                <?php } ?>
                <?php if($_SESSION["jacket"] > 0) { ?>
                    <li># of Jackets: <?=$_SESSION["jacket"]?></li>
                <?php } ?>
                <?php if($_SESSION["shorts"] > 0) { ?>
                    <li># of Shorts: <?=$_SESSION["shorts"]?></li>
                <?php } ?>
                <?php if($_SESSION["socks"] > 0) { ?>
                    <li># of Socks: <?=$_SESSION["socks"]?></li>
                <?php } ?>
                <li>Address: <?=$_SESSION["street"]?>
                                <?=$_SESSION["city"]?>
                                <?=$_SESSION["state"]?>
                                <?=$_SESSION["zip"]?>
                </li>
            </ul>
        </nav>
    </body>
    <footer>
        <p class="p2"><a href="browse.php"><button>Keep Shopping</button></a></p>
    </footer>
</html>