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
    $confirmPassword = htmlspecialchars($_POST["confirmPassword"]);

    if ($password != $confirmPassword) {
        header("Location: ta07welcome.php?error=1");
    } else {
        for(int i = 0; 0 > $paswword.size(); i++) {
            
        }
    }
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);


    try {
        $statement = $db->prepare('INSERT INTO w07users (username, pass_hash) 
                                    VALUES (:username, :pass_hash)');
        $statement->bindValue(':username', $username);
        $statement->bindValue(':pass_hash', $pass_hash);
        $statement->execute();
        header("Location: ta07welcome.php");
    } catch (\Throwable $e) {
        echo "Error: $e";
    }
?>