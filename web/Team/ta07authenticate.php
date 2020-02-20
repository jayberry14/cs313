<?php
    session_start();
    try {
        require "dbConnect.php";
        $db = get_db();
    } catch (Exception $e) {
        echo "This is the error: $e";
        exit;
    }

    $username = htmlspecialchars($_POST["username"]);    
    $password = htmlspecialchars($_POST["password"]);
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);
    // $pass_ver = password_verify($password, $pass_hash);

    try {
        $statement = $db->prepare('SELECT id FROM w07users WHERE username = :username, pass_hash = :pass_hash');
        $statement->bindValue(':username', $username);
        $statement->bindValue(':pass_hash', $pass_hash);
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            if ($row["id"] != null) {
                $authenticate = true;
            }
            // $pass_ver = password_verify($password, $pass_hash);
        }

        if ($authenticate == true) {
            header("Location: ta07success.php");
        } else {
            header("Location: ta07welcome.php");
        }
        
    } catch (Exception $e) {
        die();
    }
?>