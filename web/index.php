<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Josh's Assignment Directory</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='directory.css'>
    <!-- <script src='directory.js'></script> -->
</head>
<body>
    <h1>Table of Contents</h1>
    <div class="column left">
        <h2>Personal Assignments</h2>
        <a href="hello.html">Assignment 1</a>
        <br>
        <a href="Personal/w2/homepage.html">Something About Me</a>
    </div>
    <div class="column right">
        <h2>Team Activities</h2>
        <a href="Team/index.html">Team Activity 1</a>
        <br>
    </div>
</body>
</html>

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