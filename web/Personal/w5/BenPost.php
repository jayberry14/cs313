<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Maximizing Utility</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/ico" href="https://images-na.ssl-images-amazon.com/images/I/41TVVos4V4L._AC_.jpg">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' media='screen' href='Ben.css'>
    </head>
    <body class="bg-9">
    <h1>Maximizing Utility</h1>
        <div class="container-fluid squish-center3">
            <div class="col-lg-12">
                <?php 
                    $income = htmlspecialchars($_POST["inputIncome"]);
                    $priceX = htmlspecialchars($_POST["inputPriceX"]);
                    $priceY = htmlspecialchars($_POST["inputPriceY"]);
                    $goodsXUtility = htmlspecialchars($_POST["inputGoodX"]);
                    $goodsYUtility = htmlspecialchars($_POST["inputGoodY"]);

                    $x = $income / ($priceX * (1 + $goodsYUtility / $goodsXUtility));
                    $y = ($income * $goodsYUtility) / ($priceY * ($goodsXUtility + $goodsYUtility));
                    $z = pow($x, $goodsXUtility) * pow($y, $goodsYUtility);

                    function L($x, $z, $goodsXUtility, $goodsYUtility) {
                        return ((pow($z, (1/$goodsYUtility)))/(pow($x, ($goodsXUtility/$goodsYUtility))));
                    }
                    // $C = ($income - $priceX * $x) / $priceY;

                    $xFloor = floor($x);
                    $yFloor = floor($y);

                    $totalSpendX = $priceX * $x;
                    $totalSpendY = $priceY * $y;
                    $totalSpendXRounded = $priceX * $xFloor;
                    $totalSpendYRounded = $priceY * $yFloor;

                    $totalSpend = $totalSpendX + $totalSpendY;
                    $totalSpendRounded = $totalSpendXRounded + $totalSpendYRounded;


                    $dataPoints1 = array(
                        array()
                    );
                    // $dataPoints2 = array(
                    //     array()
                    // );
                    
                    for ($i = 0; $i < 100; $i++)
                    {
                        array_push($dataPoints1, $L);
                        // array_push($dataPoints2, $C);
                    }
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th><?php echo "Title";?></th>
                            <th><?php echo "Results/Input"?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo "Income";?></td>
                            <td><?php echo "$$income";?></td>
                        </tr>
                        <tr>
                            <td><?php echo "Price of X";?></td>
                            <td><?php echo "$$priceX";?></td>
                        </tr>
                        <tr>
                            <td><?php echo "Price of Y";?></td>
                            <td><?php echo "$$priceY";?></td>
                        </tr>
                        <tr>
                            <td><?php echo "Utility for X goods";?></td>
                            <td><?php echo "$goodsXUtility";?></td>
                        </tr>
                        <tr>
                            <td><?php echo "Utility for Y goods";?></td>
                            <td><?php echo "$goodsYUtility";?></td>
                        </tr>
                        <tr>
                            <td><?php echo "The total cost of goods X";?></td>
                            <td><?php echo "$$totalSpendX";?></td>
                        </tr>
                        <tr>
                            <td><?php echo "The total cost of goods Y";?></td>
                            <td><?php echo "$$totalSpendY";?></td>
                        </tr>
                        <tr>
                            <td><?php echo "Quantity of X to purchase";?></td>
                            <td><?php echo "$xFloor";?></td>
                        </tr>
                        <tr>
                            <td><?php echo "Quantity of Y to purchase";?></td>
                            <td><?php echo "$yFloor";?></td>
                        </tr>
                        <tr>
                            <td><?php echo "The total cost overall";?></td>
                            <td><?php echo "$$totalSpendRounded out of $$totalSpend";?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>