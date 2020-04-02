<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Optimizing Supply</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' media='screen' href='Ben.css'>
    </head>
    <body class="bg-8">
    <h1>Optimizing Supply</h1>
        <form action="BenPost.php" method="POST">
            <div class="container-fluid row squish-center3">
            <h3>Let's calculate a Lagrangian!</h3>
                <div class="col-lg-12">
                    <label for="inputIncome">Income</label>
                    <input name="inputIncome" type="text" class="form-control" placeholder="Enter the Income"> <!-- I -->
                    <label for="inputGoodX">Good X's Preference</label>
                    <input name="inputGoodX" type="text" class="form-control" placeholder="Enter X's Preference"> <!-- Alpha -->
                    <label for="inputGoodY">Good Y's Preference</label>
                    <input name="inputGoodY" type="text" class="form-control" placeholder="Enter Y's Preference"> <!-- Beta -->
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