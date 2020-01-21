<?php 
    // Retrieve the POST data
    $email = htmlspecialchars($_POST["emailForPHP"]);
    $password = htmlspecialchars($_POST["passwordForPHP"]);

    // Show the data
    echo "Here is your email $email, and your password is $password";
?>