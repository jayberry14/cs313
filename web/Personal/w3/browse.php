<!DOCTYPE html>
<html class="no-js">
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
    <script>
			// prevents refresh from submitting form and clears out unneeded variables
            // Thank you Brother Birch for this section of JS!
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
    </script>
    </head>
    <body>
        <a href="viewcart.php"><button class="button">View your cart</button></a>
    <?php include '../../header.php'?>
    <?php session_start(); ?>
        <h1>Browse to your heart's content!</h1>
        <div class="bg-2 column">
            <li>Choice 1</li>
            <li>Choice 2</li>
            <li>Choice 3</li>
        </div>
        <div>
            <a href="checkout.php"><button class="button">Checkout</button></a>
        </div>
    </body>
</html>