<?php // Login
    session_start();
    if ($_SESSION["loggedIn"] != true && $_SESSION["auth"] != 1) {
        header("Location: ridesharelanding.php");
    }

    try {
        require "dbConnect.php";
        $db = get_db();
    } catch (Exception $e) {
        exit;
    }

    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    try{
        $login = $db->prepare('SELECT authenticate FROM riders
                                    WHERE username = :username
                                    AND password = :password');
        $login->bindValue(':username', $username, PDO::PARAM_STR);
        $login->bindValue(':password', $password, PDO::PARAM_STR);
        $login->execute();
        
        while ($row = $login->fetch(PDO::FETCH_ASSOC)) {
            $auth = $row["authenticate"]; 
        }

        if ($auth = 1)
        {
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