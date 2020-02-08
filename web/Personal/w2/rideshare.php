<?php
    session_start();
    require "dbConnect.php";
    $db = get_db();

    $_SESSION["location"];
    $_SESSION["destination"];
    $_SESSION["date"];
    $_SESSION["time"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Josh's Assignment Directory</title>
    <link rel="icon" type="image/ico" href="https://web.byui.edu/mybyui/img/header/byui_logo.png">
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
    <header>
        <div class="container-fluid bg-3">
            <img src="https://web.byui.edu/mybyui/img/header/byui_logo.png" class="img-3" width="82" height="82" alt="BYU-IDAHO in white letters on black background" />
            <h1>Ride Share</h1>
        </div>
    </header>
    
    <div class="container-fluid bg-1" style="height:35vw">
    <form action="" method="post">
        <input type="text" id="location" placeholder="Where from..?">
        <br>
        <input type="text" id="destination" placeholder="Going to..?">
        <br>
        <input type="submit">
        <?php
            if(isset($_POST["submit"])){
                $_SESSION["location"] = $_POST["location"];
                $_SESSION["destination"] = $_POST["destination"];
                $_SESSION["date"] = $_POST["date"];
                $_SESSION["time"] = $_POST["time"];
                $location = $_SESSION["location"];
                $destination = $_SESSION["destination"];
                $date = $_SESSION["date"];
                $time = $_SESSION["time"];

                $rides = $db->prepare("SELECT location, destination, date, time 
                                    FROM rides 
                                    WHERE location = '$location' AND destination = '$destination' AND date = '$date' AND time = '$time'");
                $rides->execute();
                echo "<table class='table'>";
                echo "<tr>";
                    echo "<td>ID</td>";
                    echo "<td>City From</td>";
                    echo "<td>City To</td>";
                    echo "<td>Seats</td>";
                    echo "<td>Date</td>";
                    echo "<td>Time</td>";
                    echo "<td>Price</td>";
                echo "</tr>";
                while ($row = $rides->fetch(PDO::FETCH_ASSOC))
                {
                    echo "<tr>";
                        echo "<td>" . $row['location'] . "</td>";
                        echo "<td>" . $row['destination'] . "</td>";
                        echo "<td>" . $row['time'] . "</td>";
                        echo "<td>" . $row['date'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }     
        ?>
    </form>
    </div>
</body>
<footer class="container-fluid bg-3">
    <h4>Copyright ©2019 Brigham Young University - Idaho</h4>
</footer>
</html>