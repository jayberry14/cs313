<?php
    session_start();
    try {
        require "dbConnect.php";
        $db = get_db();
    } catch (Exception $e) {
        echo "This is the error: $e";
        exit;
    }

    $authenticate = false;
    $username = htmlspecialchars($_POST["username"]);    
    $password = htmlspecialchars($_POST["password"]);
    //$pass_hash = password_hash($password, PASSWORD_DEFAULT);
    //$pass_ver = password_verify($password, $pass_hash);
    var_dump($pass_hash);

    try {
        $statement = $db->prepare('SELECT pass_hash FROM w07users WHERE username = :username');
        $statement->bindValue(':username', $username);
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            var_dump($row["pass_hash"]);
            if (password_verify($password, $row["pass_hash"]) {
                $authenticate = true;
            }
            // $pass_ver = password_verify($password, $pass_hash);
        }
        var_dump($authenticate);
        if ($authenticate == true) {
            //header("Location: ta07success.php");
        } else {
            //header("Location: ta07welcome.php");
        }
        
    } catch (Exception $e) {
        die();
    }
?>