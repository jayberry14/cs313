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
    $username = htmlspecialchars($_POST["usernameCreate"]);
    $password = htmlspecialchars($_POST["pwdCreate"]);
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);

    try {
        // Only insert if the username isn't taken
        $usernameCheck = $db->prepare('SELECT username FROM rider WHERE username = :username');
        $usernameCheck->bindValue(':username', $username, PDO::PARAM_STR);
        while ($row = $usernameCheck->fetch(PDO::FETCH_ASSOC)) {    // Cycle through all the different usernames in my table
            if ($row["username"] = $username) {                     // If any of them match the user's input
                $uName = $username;                                 // Set that input to a temp variable
                echo "Error: Username taken already. Select a different one.";
            }
        }

        if ($uName = $username) {                                   // If that temp variable has been set then don't let the user pick that username
            echo "ERROR: Username already taken. Please select another.";
        } else {
            $rideInsert = $db->prepare('INSERT INTO riders (authenticate, fname, lname, email, phone, username, password_hash)
                                        VALUES (true, :fname, :lname, :email, :phone, :username, :pass_hash)');
            
            $rideInsert->bindValue(':fname', $fname, PDO::PARAM_STR);
            $rideInsert->bindValue(':lname', $lname, PDO::PARAM_STR);
            $rideInsert->bindValue(':email', $email, PDO::PARAM_STR);
            $rideInsert->bindValue(':phone', $phone, PDO::PARAM_STR);
            $rideInsert->bindValue(':pass_hash', $pass_hash, PDO::PARAM_STR);
            $rideInsert->execute();

            while ($row = $rideInsert->fetch(PDO::FETCH_ASSOC)) {
                $auth = $row["authenticate"]; 
            }
            
            $_SESSION["loggedIn"] = true;
            $_SESSION["auth"] = $auth;
            $_SESSION["username"] = $username;
        }
    } catch (Exception $e) {
        echo "Error: $e";
        echo "Account creation failed!";
        die();
    }

    header("Location: riders.php");
?>