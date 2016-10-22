<?php
$pageTitle = 'Sensoren';
$pageDescription = 'Alle lesenden Geräte';
$pageSkin = 'black';
require_once("_header.php") ?>

<?php
$devices = getDevices($pimaticUsername, $pimaticPassword, $pimaticHost);

	foreach($devices as $device)
	{
//print_r($device);
		if($device->template !== 'temperature')
			continue;

	   echo '<div class="row">';
	   echo '  <div class="col-md-12">';

	   echo '    <div class="box box-info">';

	   echo '      <div class="box-header with-border">';
	   echo '        <h3 class="box-title">'.$device->name.' - Temperatur und Luftfeuchtigkeit</h3>';
	   echo '      </div>';

	   echo '      <div class="box-body">';
	   echo '      <div class="row">';
	   echo '        <div class="col-lg-3">';
	   echo '          <div class="small-box bg-red">';
	   echo '            <div class="inner"><h3>'.round($device->attributes[0]->value, 1).'<sup style="font-size: 20px">'.$device->attributes[0]->unit.'</sup></h3><p>'.$device->name.'</p></div>';
	   echo '            <div class="icon"><i class="ion ion-thermometer"></i></div>';
	   echo '          </div>';
	   if(array_key_exists(1, $device->attributes)) {
	       echo '          <div class="small-box bg-aqua">';
	       echo '            <div class="inner"><h3>'.round($device->attributes[1]->value, 1).'<sup style="font-size: 20px">'.$device->attributes[1]->unit.'</sup></h3><p>'.$device->name.'</p></div>';
	       echo '            <div class="icon"><i class="ion ion-waterdrop"></i></div>';
	       echo '          </div>';
	   }
           echo '        </div>';
	   echo '        <div class="col-lg-9">';
	   echo '          <div class="chart">';
	   echo '            <canvas id="lineChart-'.$device->id.'" style="height:250px"></canvas>';
	   echo '          </div>';
	   echo '        </div>';
	   echo '      </div>';
	   echo '      </div>';

	   echo '    </div>';

	   echo '  </div>';
           echo '</div>';
	}
?>


<?php
$footerDataDyn = "";

$ids = 0;
foreach($devices as $device)
{
	if($device->template !== 'temperature')
		continue;

$labels = '';
$data = '';

    foreach($device->attributes[0]->history as $history)
    {
        //$labels .= '"'.date('d.m.Y H:i', $history->t/1000).'",';
	$labels .= '"'.date('H:i', $history->t/1000).'",';
        $data .= round($history->v, 2).',';
    }

$labels2 = '';
$data2 = '';
    if(array_key_exists(1, $device->attributes)) {
        foreach($device->attributes[1]->history as $history)
        {
            $labels2 .= '"'.date('H:i', $history->t/1000).'",';
            $data2 .= round($history->v, 2).',';
        }
    }

    $footerDataDyn .= 'var lineChartData'.$ids.' = {'."\r\n";
    $footerDataDyn .= '  labels: ['.$labels.'],'."\r\n";
    $footerDataDyn .= '  datasets: ['."\r\n";
    $footerDataDyn .= '  {'."\r\n";
    $footerDataDyn .= '    label: "Temperatur",'."\r\n";
    $footerDataDyn .= '    fillColor: "#dd4b39",'."\r\n";
    $footerDataDyn .= '    strokeColor: "#dd4b39",'."\r\n";
    $footerDataDyn .= '    pointColor: "#dd4b39",'."\r\n";
    $footerDataDyn .= '    pointStrokeColor: "#dd4b39",'."\r\n";
    $footerDataDyn .= '    pointHighlightFill: "#fff",'."\r\n";
    $footerDataDyn .= '    pointHighlightStroke: "#dd4b39",'."\r\n";
    $footerDataDyn .= "    data: [$data],\r\n";
    $footerDataDyn .= '  }'."\r\n";

    if(array_key_exists(1, $device->attributes)) {
    $footerDataDyn .= '  ,{'."\r\n";
    $footerDataDyn .= '    label: "Luftfeuchtigkeit",'."\r\n";
    $footerDataDyn .= '    fillColor: "#00c0ef",'."\r\n";
    $footerDataDyn .= '    strokeColor: "#00c0ef",'."\r\n";
    $footerDataDyn .= '    pointColor: "#00c0ef",'."\r\n";
    $footerDataDyn .= '    pointStrokeColor: "#00c0ef",'."\r\n";
    $footerDataDyn .= '    pointHighlightFill: "#fff",'."\r\n";
    $footerDataDyn .= '    pointHighlightStroke: "#00c0ef",'."\r\n";
    $footerDataDyn .= "    data: [$data2],\r\n";
    $footerDataDyn .= '  }'."\r\n";
    }

    $footerDataDyn .= '  ]'."\r\n";
    $footerDataDyn .= '};'."\r\n";

    $footerDataDyn .= 'var lineChartCanvas = $("#lineChart-'.$device->id.'").get(0).getContext("2d");'."\r\n";
    $footerDataDyn .= 'var lineChart = new Chart(lineChartCanvas);'."\r\n";
    $footerDataDyn .= 'lineChart.Line(lineChartData'.$ids.', lineChartOptions);'."\r\n";

    $ids++;
}

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