		<?php
		include "koneksi.php";
		error_reporting(7);
			        ?>
			        <!DOCTYPE html>
			        <html>
			        <head>
			        	<title></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style type="text/css">
    	
    	#chartdiv1 {
  width: 100%;
  height: 400px;
}
    </style>
			        </head>
			        <body>
			        	<div class="container">
			        	<br>										
							<a href="./"><button type="button">Back me!</button></a> Kejaksaan Negeri Kota Pekalongan e-Survey Charts
							<center><h2>Grapik Kepuasan Pelayanan</h2></center>

							<?php

							$resultbaik = mysqli_query($conni, "SELECT COUNT(*) from quesptsp where jawaban = 'baik'");
							$baik = mysqli_fetch_array($resultbaik);

							$resultbiasa = mysqli_query($conni, "SELECT COUNT(*) from quesptsp where jawaban = 'biasa'");
							$biasa = mysqli_fetch_array($resultbiasa);
							
							$resultburuk = mysqli_query($conni, "SELECT COUNT(*) from quesptsp where jawaban = 'buruk'");
							$buruk = mysqli_fetch_array($resultburuk);

							/*echo "$baik[0]";
							echo "$biasa[0]";
							echo "$buruk[0]"; */

								$a = $baik[0];
								$b = $biasa[0];
								$c = $buruk[0];

								$tot = $a+$b+$c;
								
								$pa = ROUND(($a / $tot) * 100);
								$pb = ROUND(($b / $tot) * 100);
								$pc = ROUND(($c / $tot) * 100);

							 
							?>

 
						<div id="chartdiv1">crutz</div>
						
							

<script src="./lib/core.js"></script>
<script src="./lib/charts.js"></script>
<script src="./lib/animated.js"></script>		
			

<!-- tambahan 2 -->			
<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv1", am4charts.PieChart);
    chart.data = [ {
      "label": "Baik Sekali",
      "data": "<?=$a?>" }, {
      "label": "Baik",
      "data": "<?=$b?>"  }, {
      "label": "Cukup",
      "data": "<?=$c?>"} ];
// Add and configure Series
var pieSeries = chart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "data";
pieSeries.dataFields.category = "label";
pieSeries.slices.template.stroke = am4core.color("#fff");
// Let's cut a hole in our Pie chart the size of 30% the radius
chart.innerRadius = am4core.percent(20);
// Put a thick white border around each Slice
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.slices.template.strokeWidth = 2;
pieSeries.slices.template.strokeOpacity = 1;
pieSeries.slices.template
  // change the cursor on hover to make it apparent the object can be interacted with
  .cursorOverStyle = [
    {
      "property": "cursor",
      "value": "pointer"
    }
  ];

pieSeries.alignLabels = false;
pieSeries.labels.template.bent = true;
pieSeries.labels.template.radius = 3;
pieSeries.labels.template.padding(0,0,0,0);
pieSeries.ticks.template.disabled = true;
// Create a base filter effect (as if it's not there) for the hover to return to
var shadow = pieSeries.slices.template.filters.push(new am4core.DropShadowFilter);
shadow.opacity = 0;
// Create hover state
var hoverState = pieSeries.slices.template.states.getKey("hover"); // normally we have to create the hover state, in this case it already exists
// Slightly shift the shadow and make it more prominent on hover
var hoverShadow = hoverState.filters.push(new am4core.DropShadowFilter);
hoverShadow.opacity = 0.7;
hoverShadow.blur = 5;
// Add a legend
chart.legend = new am4charts.Legend();
}); // end am4core.ready()
</script>

<!-- HTML -->

<!-- eof tambahan2 -->

							
					
			        <?php
			       // echo '</div>';
			 //   }
			    
		//	}
			
?>
<nav class="navbar fixed-bottom navbar-light bg-light">
  <a class="navbar-brand" href="#">Kejaksaan Negeri Kota Pekalongan</a>
</nav>
</div>

     
</body>
</html>
