<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Super Calculator</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="BenPost.php" method="POST">
            <div>
                <label for="inputIncome">Income</label>
                <input name="inputI" type="text" class="form-control" placeholder="Enter the Income"> <!-- I -->
                <label for="inputGoodX">Good X's Preference</label>
                <input name="inputGoodX" type="text" class="form-control" placeholder="Enter X's Preference"> <!-- Alpha -->
                <label for="inputGoodY">Good Y's Preference</label>
                <input name="inputGoodY" type="text" class="form-control" placeholder="Enter Y's Preference"> <!-- Beta -->
                <label for="inputPriceX">Price of X</label>
                <input name="inputPriceX" type="text" class="form-control" placeholder="Enter Price of X"> <!-- px -->
                <label for="inputPriceY">Price of Y</label>
                <input name="inputPriceY" type="text" class="form-control" placeholder="Enter Price of Y"> <!-- py -->
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>