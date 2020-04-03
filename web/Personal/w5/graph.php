<?php
 
$dataPoints1 = array(
	array("x"=> 2,	"y"=> 1.6735),
	array("x"=> 3,	"y"=> 1.619),
	array("x"=> 4,	"y"=> 1.5673),
	array("x"=> 5,	"y"=> 1.5182),
	array("x"=> 6,	"y"=> 1.4715),
	array("x"=> 7,	"y"=> 1.4271),
	array("x"=> 8,	"y"=> 1.3847),
	array("x"=> 9,	"y"=> 1.3444),
	array("x"=> 10,	"y"=> 1.3059),
	array("x"=> 11,	"y"=> 1.2692),
	array("x"=> 12,	"y"=> 1.234),
	array("x"=> 13,	"y"=> 1.2005),
	array("x"=> 14,	"y"=> 1.1683),
	array("x"=> 15,	"y"=> 1.1375),
	array("x"=> 16,	"y"=> 1.1081),
	array("x"=> 17,	"y"=> 1.0798),
	array("x"=> 18,	"y"=> 1.0526),
	array("x"=> 19,	"y"=> 1.0266),
	array("x"=> 20,	"y"=> 1.0016),
	array("x"=> 21,	"y"=> 0.9775),
	array("x"=> 22,	"y"=> 0.9544),
	array("x"=> 23,	"y"=> 0.9321),
	array("x"=> 24,	"y"=> 0.9107),
	array("x"=> 25,	"y"=> 0.89),
	array("x"=> 26,	"y"=> 0.8701),
	array("x"=> 27,	"y"=> 0.8509),
	array("x"=> 28,	"y"=> 0.8324),
	array("x"=> 29,	"y"=> 0.8145),
	array("x"=> 30,	"y"=> 0.7972),
	array("x"=> 31,	"y"=> 0.7805),
	array("x"=> 32,	"y"=> 0.7644),
	array("x"=> 33,	"y"=> 0.7488),
	array("x"=> 34,	"y"=> 0.7337),
	array("x"=> 35,	"y"=> 0.7191),
	array("x"=> 36,	"y"=> 0.705),
	array("x"=> 37,	"y"=> 0.6913),
	array("x"=> 38,	"y"=> 0.678),
	array("x"=> 39,	"y"=> 0.6652),
	array("x"=> 40,	"y"=> 0.6527),
	array("x"=> 45,	"y"=> 0.5958),
	array("x"=> 50,	"y"=> 0.5465),
	array("x"=> 55,	"y"=> 0.5036),
	array("x"=> 60,	"y"=> 0.466),
	array("x"=> 65,	"y"=> 0.4329),
	array("x"=> 70,	"y"=> 0.4035),
	array("x"=> 75,	"y"=> 0.3774),
	array("x"=> 80,	"y"=> 0.354)
);

$dataPoints2 = array(
	array("x"=> 2,	"y"=> 0.9999),
	array("x"=> 3,	"y"=> 1),
	array("x"=> 4,	"y"=> 1),
	array("x"=> 5,	"y"=> 1),
	array("x"=> 6,	"y"=> 0.9999),
	array("x"=> 7,	"y"=> 0.9999),
	array("x"=> 8,	"y"=> 0.9999),
	array("x"=> 9,	"y"=> 0.9998),
	array("x"=> 10,	"y"=> 0.9997),
	array("x"=> 11,	"y"=> 0.9996),
	array("x"=> 12,	"y"=> 0.9995),
	array("x"=> 13,	"y"=> 0.9994),
	array("x"=> 14,	"y"=> 0.9992),
	array("x"=> 15,	"y"=> 0.9991),
	array("x"=> 16,	"y"=> 0.9989),
	array("x"=> 17,	"y"=> 0.9988),
	array("x"=> 18,	"y"=> 0.9986),
	array("x"=> 19,	"y"=> 0.9984),
	array("x"=> 20,	"y"=> 0.9982),
	array("x"=> 21,	"y"=> 0.998),
	array("x"=> 22,	"y"=> 0.9978),
	array("x"=> 23,	"y"=> 0.9975),
	array("x"=> 24,	"y"=> 0.9973),
	array("x"=> 25,	"y"=> 0.997),
	array("x"=> 26,	"y"=> 0.9968),
	array("x"=> 27,	"y"=> 0.9965),
	array("x"=> 28,	"y"=> 0.9962),
	array("x"=> 29,	"y"=> 0.9959),
	array("x"=> 30,	"y"=> 0.9956),
	array("x"=> 31,	"y"=> 0.9953),
	array("x"=> 32,	"y"=> 0.995),
	array("x"=> 33,	"y"=> 0.9947),
	array("x"=> 34,	"y"=> 0.9944),
	array("x"=> 35,	"y"=> 0.994),
	array("x"=> 36,	"y"=> 0.9937),
	array("x"=> 37,	"y"=> 0.9933),
	array("x"=> 38,	"y"=> 0.993),
	array("x"=> 39,	"y"=> 0.9926),
	array("x"=> 40,	"y"=> 0.9922),
	array("x"=> 45,	"y"=> 0.9902),
	array("x"=> 50,	"y"=> 0.988),
	array("x"=> 55,	"y"=> 0.9857),
	array("x"=> 60,	"y"=> 0.9832),
	array("x"=> 65,	"y"=> 0.9806),
	array("x"=> 70,	"y"=> 0.9778),
	array("x"=> 75,	"y"=> 0.9748),
	array("x"=> 80,	"y"=> 0.9718)
);
	
?>
<!DOCTYPE HTML>
<html>
<head> 
<meta charset="UTF-8"> 
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
<body>
<div id="chartContainer" style="height: 370px; width: 100%;">
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
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html> 