<?php
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


    try {
        $statement = $db->prepare('INSERT INTO w07users (username, pass_hash) 
                                    VALUES (:username, :pass_hash)');
        $statement->bindValue(':username', $username);
        $statement->bindValue(':pass_hash', $pass_hash);
        $statement->execute();
    } catch (\Throwable $e) {
        echo "Error: $e";
    }
?>