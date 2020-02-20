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

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    try {
        if (($db->prepare('SELECT username FROM riders')) = $username) {
            echo "ERROR: Username already taken, please try another";
        } else {
            $rideInsert = $db->prepare('INSERT INTO riders (authenticate, fname, lname, email, phone, username, password_hash)
                                    VALUES (true, :fname, :lname, :email, :phone, :username, :password_hash)');
        
            $rideInsert->bindValue(':fname', $fname, PDO::PARAM_STR);
            $rideInsert->bindValue(':lname', $lname, PDO::PARAM_STR);
            $rideInsert->bindValue(':email', $email, PDO::PARAM_STR);
            $rideInsert->bindValue(':phone', $phone, PDO::PARAM_STR);
            $rideInsert->bindValue(':username', $username, PDO::PARAM_STR);
            $rideInsert->bindValue(':password', $password, PDO::PARAM_STR);
            $rideInsert->execute();
            
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