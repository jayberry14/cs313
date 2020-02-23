<?php
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

    try {
        $statement = $db->prepare('SELECT pass_hash FROM w07users WHERE username = :username');
        $statement->bindValue(':username', $username);
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            if (password_verify($password, $row["pass_hash"])) {
                $authenticate = true;
            }
        }
        if ($authenticate == true) {
            header("Location: ta07success.php");
            die();
        } else {
            header("Location: ta07welcome.php");
            die();
        }
        
    } catch (Exception $e) {
        die();
    }
?>