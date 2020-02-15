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
        <form action="" method="post">
            <div class="form-group">
                <label for="location">Where from..?</label>
                <select class="form-control" id="location">
                    <option>Rexburg</option>
                    <option>Provo</option>
                    <option>Salt Lake City</option>
                    <option>Boise</option>
                </select>
            </div>
            <div class="form-group">
                <label for="destination">Going to..?</label>
                <select class="form-control" id="destination">
                    <option>Rexburg</option>
                    <option>Provo</option>
                    <option>Salt Lake City</option>
                    <option>Logan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="time">What time to depart...?</label>
                <input type="text" class="form-control" name="time" placeholder="18:30" id="time">
            </div>
            <div class="form-group">
                <label for="date">What day to depart...?</label>
                <input type="text" class="form-control" name="date" placeholder="02/20/2020" id="date">
            </div>
            <div class="form-group">
                <label for="price">How much to pay...?</label>
                <input type="text" class="form-control" name="price" placeholder="10" id="price">
            </div>
            <br>
            <button type="submit" class="btn btn-default" id="submit">Search</button>
            <?php
                if(isset($_POST["submit"])){
                    $_SESSION["id"]          = $_POST["id"];
                    $_SESSION["location"]    = $_POST["location"];
                    $_SESSION["destination"] = $_POST["destination"];
                    $_SESSION["price"]       = $_POST["price"];
                    $_SESSION["date"]        = $_POST["date"];
                    $_SESSION["time"]        = $_POST["time"];
                    $_SESSION["driver_id"]   = $_POST["driver_id"];
                    $_SESSION["rider_id"]    = $_POST["rider_id"];
                    
                    $id          = $_SESSION["id"];
                    $location    = $_SESSION["location"];
                    $destination = $_SESSION["destination"];
                    $price       = $_SESSION["price"];
                    $date        = $_SESSION["date"];
                    $time        = $_SESSION["time"];
                    $driver_id   = $_SESSION["driver_id"];
                    $rider_id    = $_SESSION["rider_id"];

                    $rides = $db->prepare("SELECT location, destination, date, time, price 
                                        FROM rides 
                                        WHERE rider_id IS NULL AND
                                        (location = '$location' 
                                        OR destination = '$destination' 
                                        OR price = '$price'
                                        OR date = '$date'
                                        OR time = '$time')");
                    $rides->execute();
                    echo "<table class='table'>";
                    echo "<tr>";
                        echo "<td>Select</td>";
                        echo "<td>Location</td>";
                        echo "<td>Destination</td>";
                        echo "<td>Time</td>";
                        echo "<td>Date</td>";
                        echo "<td>Price</td>";
                    echo "</tr>";
                    while ($row = $rides->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <td><input type="checkbox" id= <?php echo $row["id"] ?> name= <?php echo $row["id"] ?> value= <?php echo $row["id"] ?>>
                            <?php
                            echo "<td>" . $row["location"] . "</td>";
                            echo "<td>" . $row["destination"] . "</td>";
                            echo "<td>" . $row["time"] . "</td>";
                            echo "<td>" . $row["date"] . "</td>";
                            echo "<td>" . $row["price"] . "</td>";
                            ?>
                        </tr>
                    <?php } ?>
                </table>
            <?php } ?>
        </form>
    </div>
</body>
<footer class="container-fluid bg-3">
    <h4>Copyright ©2019 Brigham Young University - Idaho</h4>
</footer>
</html>
