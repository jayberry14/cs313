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

    if ($password != $confirmPassword && (strlen($password) < 7)) {
        header("Location: ta07welcome.php?confirmError=1");
        die();
    } 
    else if(ctype_alnum($password) && (strlen($password) < 7)) {
        header("Location: ta07welcome.php?alphaNumError=1");
        die();
    }
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);

    try {
        $statement = $db->prepare('INSERT INTO w07users (username, pass_hash) 
                                    VALUES (:username, :pass_hash)');
        $statement->bindValue(':username', $username);
        $statement->bindValue(':pass_hash', $pass_hash);
        $statement->execute();
        header("Location: ta07welcome.php");
        die();
    } catch (\Throwable $e) {
        echo "Error: $e";
    }
?>