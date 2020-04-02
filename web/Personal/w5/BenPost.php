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
        <?php require("canvasjs.min.js");?>
        <script>
            window.onload = function () {
            
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title:{
                    text: "Dynamic Viscosity Vs Density over Temperature of Water"
                },
                axisX:{
                    title: "Temperature [°C]"
                },
                axisY:{
                    title: "Dynamic Viscosity [mPa.s]",
                    titleFontColor: "#4F81BC",
                    lineColor: "#4F81BC",
                    labelFontColor: "#4F81BC",
                    tickColor: "#4F81BC"
                },
                axisY2:{
                    title: "Density [g/cm³]",
                    titleFontColor: "#C0504E",
                    lineColor: "#C0504E",
                    labelFontColor: "#C0504E",
                    tickColor: "#C0504E",
                    includeZero: false
                },
                legend:{
                    cursor: "pointer",
                    dockInsidePlotArea: true,
                    itemclick: toggleDataSeries
                },
                data: [{
                    type: "line",
                    name: "Dynamic Viscosity",
                    markerSize: 0,
                    toolTipContent: "Temperature: {x} °C <br>{name}: {y} mPa.s",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
                },{
                    type: "line",
                    axisYType: "secondary",
                    name: "Density",
                    markerSize: 0,
                    toolTipContent: "Temperature: {x} °C <br>{name}: {y} g/cm³",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();
            
            function toggleDataSeries(e){
                if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                }
                else{
                    e.dataSeries.visible = true;
                }
                chart.render();
            } 
        }
        </script>
    </head>
    <body class="bg-9">
    <h1>Maximizing Utility</h1>
        <div class="container-fluid squish-center3">
            <div class="col-lg-12">
                <?php 
                    $income = htmlspecialchars($_POST["inputIncome"]);
                    $priceX = htmlspecialchars($_POST["inputPriceX"]);
                    $priceY = htmlspecialchars($_POST["inputPriceY"]);
                    $goodsXPreference = htmlspecialchars($_POST["inputGoodX"]);
                    $goodsYPreference = htmlspecialchars($_POST["inputGoodY"]);

                    $x = $income / ($priceX * (1 + $goodsYPreference / $goodsXPreference));
                    $y = ($income * $goodsYPreference) / ($priceY * ($goodsXPreference + $goodsYPreference));
                    $z = pow($x, $goodsXPreference) * pow($y, $goodsYPreference);

                    function L($x, $z, $goodsXPreference, $goodsYPreference) {
                        return ((pow($z, (1/$goodsYPreference)))/(pow($x, ($goodsXPreference/$goodsYPreference))));
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
                            <td><?php echo "Preference for X goods";?></td>
                            <td><?php echo "$goodsXPreference";?></td>
                        </tr>
                        <tr>
                            <td><?php echo "Preference for Y goods";?></td>
                            <td><?php echo "$goodsYPreference";?></td>
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