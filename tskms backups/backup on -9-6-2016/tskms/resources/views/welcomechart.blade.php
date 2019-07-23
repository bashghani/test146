<!DOCTYPE HTML>
<html>
<head>
	<script type="text/javascript">
	window.onload = function() {
		var chart = new CanvasJS.Chart("chartContainer", {
			title: {
				text: "MY Sales chart"
			},
			axisX: {
				interval: 10
			},
			data: [{
				type: "line",
				dataPoints: [
				  { x: 10, y: 45 },
				  { x: 20, y: 14 },
				  { x: 30, y: 28 },
				  { x: 40, y: 14 },
				  { x: 50, y: 12 },
				  { x: 60, y: 70 },
				  { x: 70, y: 20 },
				  { x: 80, y: 60 },
				  { x: 90, y: 10 },
				  { x: 100, y: 50 },
				  { x: 110, y: 40 },
				  { x: 120, y: 14 },
				  { x: 130, y: 70 },
				  { x: 140, y: 40 },
				  { x: 150, y: 90 },
				]
			}]
		});
		chart.render();
	}
	</script>
	<script src="canvasjs.min.js"></script>
	<title>CanvasJS Example</title>
</head>

<body>
	<div id="chartContainer" style="height: 400px; width: 60%;"></div>
</body>

</html>