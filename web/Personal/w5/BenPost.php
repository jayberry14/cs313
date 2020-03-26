<?php 
    $priceX = htmlspecialchars($_POST["pricexForPHP"]);
    $priceY = htmlspecialchars($_POST["priceyForPHP"]);
    $budgetCon = htmlspecialchars($_POST["budgetConstraint"]);
    $A = htmlspecialchars($_POST["inputa"]);
    $B = htmlspecialchars($_POST["inputb"]);
    
    echo "Price of X: $priceX <br><br>";
    echo "Price of Y: $priceY <br><br>";
    echo "X + Y = $priceX + $priceY <br>";
    
?>