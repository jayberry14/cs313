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
    <link rel='stylesheet' type='text/css' media='screen' href='layout.css'>
    </head>
    <body>
        <header>
            <h1>View Your Cart</h1>
        </header>
        <section>
            <article>
            </article>
        </section>
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