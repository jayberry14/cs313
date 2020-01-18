<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Josh's Assignment Directory</title>
    <link rel="icon" type="image/ico" href="https://cdn.dribbble.com/users/646147/screenshots/5600907/j_4x.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='directory.css'>
    <!-- <script src='directory.js'></script> -->
    <script>
			// prevents refresh from submitting form and clears out unneeded variables
            // Thank you Brother Birch for this section of JS!
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
    </script>
</head>
<body>
    <?php include 'header.php';?>
    <?php session_start(); ?>
    <h1>Table of Contents</h1>
    <div class="row container-fluid">
        <div class="col left">
            <h2>Personal Assignments</h2>
                <a href="hello.html">Assignment 1</a>
                <br><br>
                <?php for ($i = 2; $i < 14; $i++) { ?>
                    <a href="Team/construction.html"><button class="button">Assignment <?php echo $i ?></button></a><br><br>
                <?php } ?>
        </div>
        <div class="col right">
            <h2>Team Activities</h2>
                <a href="Team/index.html">Team Activity 1</a>
                <br><br>
                <?php for ($i = 2; $i < 14; $i++) { ?>
                    <a href="Team/construction.html">Team Activity <?php echo $i ?></a><br><br>
                <?php } ?>
        </div>
    </div>
</body>
<footer>
    <?php
        echo "Hello World!";
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
</html>

