<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Super Calculator</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid row">
            <div class="col-lg-6">
                <?php 
                    $income = htmlspecialchars($_POST["inputIncome"]);
                    $priceX = htmlspecialchars($_POST["inputPriceX"]);
                    $priceY = htmlspecialchars($_POST["inputPriceY"]);
                    $goodsXPreference = htmlspecialchars($_POST["inputGoodX"]);
                    $goodsYPreference = htmlspecialchars($_POST["inputGoodY"]);
                    
                    $x = $income / ($priceX * (1 + $goodsYPreference / $goodsXPreference));
                    $y = ($income * $goodsYPreference) / ($priceY * ($goodsXPreference + $goodsYPreference));

                    $totalSpendX = $priceX * $x;
                    $totalSpendY = $priceY * $y;

                    $totalSpend = $totalSpendX + $totalSpendY;

                    echo "Income:  $income <br><br>";
                    echo "Price of X: $priceX <br><br>";
                    echo "Price of Y: $priceY <br><br>";
                    echo "Preference of X goods: $goodsXPreference <br><br>";
                    echo "Preference of Y goods: $goodsYPreference <br><br>";
                    echo "Quantity of X's goods to be sold is: $x <br>";
                    echo "Quantity of Y's goods to be sold is: $y <br>";
                    echo "The total expendature on goods X is: $totalSpendX <br>";
                    echo "The total expendature on goods Y is: $totalSpendY <br>";
                    echo "The total expendature on goods X and Y comes to: $totalSpend <br>";
                ?>
            </div>
        </div>
    </body>
</html>