<?php
$pageTitle = 'Terrarium';
$pageDescription = 'Daten des Terrariums';
$pageSkin = 'green';
require_once("_header.php") ?>

<?php
$id = htmlspecialchars($_GET['id']);
$devices = getDevices($pimaticUsername, $pimaticPassword, $pimaticHost);
?>

<div class="row">
	<div class="col-md-12">
		<h2><?php echo $terrariumPages[$id]->name; ?></h2>
	</div>
</div>

<!--<div class="row">
		<div class="col-md-6">
			<div class="box box-solid">
				<div class="box-body">
					<img src="images/snake.jpg" alt="Boa constrictor">
				</div>
			</div>
		</div>	
		<div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-book"></i>
              <h3 class="box-title">Schlangen</h3>
            </div>
            <div class="box-body">
				<dl class="dl-horizontal">
					<dt>Art</dt>
					<dd>Boa constrictor</dd>
					<dt>Euismod</dt>
					<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
					<dd>Donec id elit non mi porta gravida at eget metus.</dd>
					<dt>Malesuada porta</dt>
					<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
					<dt>Felis euismod semper eget lacinia</dt>
					<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
					  sit amet risus.</dd>
				</dl>
            </div>
          </div>
        </div>		
</div>-->

<div class="row">
	<?php
	usort($devices, function($b, $a) { // Reversed b/a so that the "ugly" devices are on the bottom
		return strcmp($a->template, $b->template);
	});

	foreach($devices as $device)
	{
		if(!deviceOnPage($device->id, $id, $terrariumPages))
			continue;

   		renderActuator($device);
	}
	?>
</div>

<?php
	$footerDataDyn = "";
	$ids = 0;

	foreach($devices as $device)
	{
		if($device->template !== 'temperature')
			continue;
		if(!deviceOnPage($device->id, $id, $terrariumPages))
			continue;

	   renderGraph($device);
	   $footerDataDyn = generateGraphData($device, $ids, $footerDataDyn);
	   $ids++;
	}
?>
	
	<!--<div class="row">
		<div class="col-md-12">
		  <div class="box box-info">
			<div class="box-header with-border">
			  <h3 class="box-title">Steuerung</h3>
			</div>
			<div class="box-body">  
				
				<a class="btn btn-app"><i class="icon ion ion-ios-lightbulb-outline"></i> Licht</a>
				<a class="btn btn-app"><i class="icon ion ion-flame"></i> Strahler</a>
				<a class="btn btn-app" href="terrariumconfig.php"><i class="icon ion ion-settings"></i> Konfiguration</a>
			  
			</div>
		  </div>
		</div>
	</div>-->

<?php
$footerJs = <<<EOT
<!-- ChartJS 1.0.1 -->
<script src="adminlte/plugins/chartjs/Chart.min.js"></script>

<!-- page script -->
<script>
  $(function () {

    var lineChartOptions = {
      //Boolean - If we should show the scale at all
      showScale: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: false,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - Whether the line is curved between points
      bezierCurve: true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension: 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot: false,
      //Number - Radius of each point dot in pixels
      pointDotRadius: 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth: 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius: 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke: true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth: 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill: false,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true
    };

    $footerDataDyn
  });
</script>
EOT;

require_once("_footer.php") ?>