<?php 

    $name = htmlspecialchars($_POST["nameForPHP"]);
    $email = htmlspecialchars($_POST["emailForPHP"]);
    $major = htmlspecialchars($_POST["majorForPHP"]);
    $visitedCountries = htmlspecialchars($_POST["visitedCountries"]);
    $comments = htmlspecialchars($_POST["comments"]);
    
    echo "Name: $name";
    echo "<br>";
    echo "Email: $email";
    echo "<br>";
    echo "Major: $major";
    echo "<br>";
    echo "Comments: $comments";
    echo "<br>";
    echo "Visited Countries: $visitedCountries";
    
?>