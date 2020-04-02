<?php 
    $income = htmlspecialchars($_POST["inputIncome"]);
    $priceX = htmlspecialchars($_POST["inputPriceX"]);
    $priceY = htmlspecialchars($_POST["inputPriceY"]);
    $goodsXPreference = htmlspecialchars($_POST["inputGoodX"]);
    $goodsYPreference = htmlspecialchars($_POST["inputGoodY"]);
    
    $x = ($income * $goodsXPreference) / ($goodsYPreference * 2 * $priceX);

    echo "Price of X: $priceX <br><br>";
    echo "Price of Y: $priceY <br><br>";
    echo "Quantity of X's goods to be sold is: $x <br>";
?>