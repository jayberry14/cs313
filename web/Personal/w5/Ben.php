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
                <label for="pricex">Price of X</label>
                <input name="pricexForPHP" type="text" class="form-control" placeholder="Enter Price of X">
                <label for="pricey">Price of Y</label>
                <input name="priceyForPHP" type="text" class="form-control" placeholder="Enter Price of Y">
                <label for="budgetConstraint">Budget Constraint</label>
                <input name="budgetConstraint" type="text" class="form-control" placeholder="Enter Budget Constaint">
            </div>
            <br>
            <div> 
                <!-- <?php 
                // $majors = array("Computer Science", "Web Design and Development", "Computer Information Technology", "Computer Engineering");
                // foreach($majors as $i) {
                //     echo "<input type=\"radio\" name=\"majorForPHP\" value=\"$i\">$i<br><br>";
                // }
                ?> -->
            </div>
            <div>
            <!-- <?php
                // $continents = array("NA" => "North America", "SA" => "South America", "EU" => "Europe", "AS" => "Asia", "AU" => "Austrailia", "AF" => "Africa", "AN" => "Antarctica",);
            ?> -->
                <!-- <label for="visited continents"></label><br>
                    <input type="checkbox" name="choices" value=""> <br>
                    <input type="checkbox" name="choices" value=""> <br>
                    <input type="checkbox" name="choices" value=""> <br>
                    <input type="checkbox" name="choices" value=""> <br>  
                    <input type="checkbox" name="choices" value=""> <br>
                    <input type="checkbox" name="choices" value=""> <br>
                    <input type="checkbox" name="choices" value=""> <br> -->

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>