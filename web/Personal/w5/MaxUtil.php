<!DOCTYPE html>
<html class="no-js"> 
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
    <body class="bg-8">
    <h1>Maximizing Utility</h1>
        <form action="MaxUtilPost.php" method="POST">
            <div class="container-fluid squish-center3">
            <h3>Let's calculate a Lagrangian!</h3>
                <div class="col-lg-12">
                    <label for="inputIncome">Income</label>
                    <input name="inputIncome" type="text" class="form-control" placeholder="Enter the Income"> <!-- I -->
                    <label for="inputGoodX">Good X's Utility</label>
                    <input name="inputGoodX" type="text" class="form-control" placeholder="Enter X's Utility"> <!-- Alpha -->
                    <label for="inputGoodY">Good Y's Utility</label>
                    <input name="inputGoodY" type="text" class="form-control" placeholder="Enter Y's Utility"> <!-- Beta -->
                    <label for="inputPriceX">Price of X</label>
                    <input name="inputPriceX" type="text" class="form-control" placeholder="Enter Price of X"> <!-- px -->
                    <label for="inputPriceY">Price of Y</label>
                    <input name="inputPriceY" type="text" class="form-control" placeholder="Enter Price of Y"> <!-- py -->
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>