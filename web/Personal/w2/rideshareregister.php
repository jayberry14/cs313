<?php //Create
    session_start();
    try {
        require "dbConnect.php";
        $db = get_db();
    } catch (Exception $e) {
        exit;
    }

    $fname = htmlspecialchars($_POST["fname"]);
    $lname = htmlspecialchars($_POST["lname"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    try{
    $rideInsert = $db->prepare('INSERT INTO riders (authenticate, fname, lname, email, phone, username, password)
                                VALUES (1, :fname, :lname, :email, :phone, :username, :password)');
    
    $rideInsert->bindValue(':fname', $fname, PDO::PARAM_STR);
    $rideInsert->bindValue(':lname', $lname, PDO::PARAM_STR);
    $rideInsert->bindValue(':email', $email, PDO::PARAM_STR);
    $rideInsert->bindValue(':phone', $phone, PDO::PARAM_INT);
    $rideInsert->bindValue(':username', $username, PDO::PARAM_STR);
    $rideInsert->bindValue(':password', $password, PDO::PARAM_STR);
    $rideInsert->execute();

    $_SESSION["loggedIn"] = true;
    $_SESSION["auth"] = $auth;
    $_SESSION["username"] = $username;

    } catch (Exception $e) {
        echo "Error: $e";
        echo "Account creation failed!";
        die();
    }

    // header("Location: riders.php");
?>