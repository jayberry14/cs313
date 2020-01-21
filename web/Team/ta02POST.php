<?php 
    $name = htmlspecialchars($_POST["nameForPHP"]);
    $email = htmlspecialchars($_POST["emailForPHP"]);
    $major = htmlspecialchars($_POST["majorForPHP"]);
    $comments = htmlspecialchars($_POST["comments"]);
    
    echo "Name: $name";
    <br>
    echo "Email: $email";
    <br>
    echo "Major: $Major";
    <br>
    echo "Comments: $comments";
    
?>