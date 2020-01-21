<?php 

    $name = htmlspecialchars($_POST["nameForPHP"]);
    $email = htmlspecialchars($_POST["emailForPHP"]);
    $major = htmlspecialchars($_POST["majorForPHP"]);
    $visitedContinents = htmlspecialchars($_POST["visitedContinents[]"]);
    $comments = htmlspecialchars($_POST["comments"]);
    
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Major: $major <br>";
    echo "Visited Countries: <br>";
    foreach($_POST["visitedContinents"] as $value)
    {
        echo $value;
        echo "<br>";
    }
    echo "Comments: $comments";
?>