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
    <link rel='stylesheet' type='text/css' media='screen' href='layout.css'>
    <script>
			// prevents refresh from submitting form and clears out unneeded variables
            // Thank you Brother Birch for this section of JS!
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
    </script>
    </head>
    <body>
    <?php session_start(); ?>
        <header>
            <h1>Browse to your heart's content!</h1>
        </header>
        <p><a href="viewcart.php"><button class="viewcart">View your cart</button></a></p>
        <section>
            <nav>
                <ul>
                    <li>Choice 1</li>
                    <li>Choice 2</li>
                    <li>Choice 3</li>
                </ul>
                <ul>
                    <li>Choice 4</li>
                    <li>Choice 5</li>
                    <li>Choice 6</li>
                </ul>
                <ul>
                    <li>Choice 7</li>
                    <li>Choice 8</li>
                    <li>Choice 9</li>
                </ul>
            </nav>
        </section>
        </div>
        <div>
            <p><a href="checkout.php"><button class="checkout">Checkout</button></a></p>
        </div>
        <footer>
        <?php
            // set default timezone
            echo "<br>";
            date_default_timezone_set('America/Boise'); // MST

            $info = getdate();
            $date = $info['mday'];
            $month = $info['mon'];
            $year = $info['year'];
            $hour = $info['hours'];
            $min = $info['minutes'];
            $sec = $info['seconds'];

            $current_date = "$date/$month/$year";
            $current_time = "$hour:$min:$sec";
            echo "$current_date";
            echo "<br>";
            echo "$current_time";
        ?>
        </footer>
    </body>
</html>