<?php 

    $name = htmlspecialchars($_POST["nameForPHP"]);
    $email = htmlspecialchars($_POST["emailForPHP"]);
    $major = htmlspecialchars($_POST["majorForPHP"]);
    // $visitedContinents = implode(' ', htmlspecialchars($_POST["visitedContinents"]));
    $comments = htmlspecialchars($_POST["comments"]);
    
    echo "Name: $name <br><br>";
    echo "Email: $email <br><br>";
    echo "Major: $major <br><br>";
    echo "Visited Countries: <br>";
    foreach(htmlspecialchars($_POST["visitedContinents"]) as $value)
    {
        echo "$value<br>";
    }
    echo "<br>Comments: $comments";
    echo "<br>";
    // echo "Test: <br>";
    // echo "Visited $visitedContinents <br>";
    // foreach($visitedContinents as $n) {
    //     echo "Ha: $n";
    // }
?>