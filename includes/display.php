<?php
if(basename($_SERVER['PHP_SELF']) == basename(__FILE__))
{
	header('Location: /');
	exit;
}
?>

<?php

function renderActuatorBox($color, $icon, $header, $unit, $device)
{
	echo '<div class="col-lg-3 col-xs-6">';
		echo '  <div class="small-box bg-'.$color.'">';
		echo '	<div class="inner"><h3>'.$header.'<sup style="font-size: 20px">'.$unit.'</sup></h3><p>'.$device->name.'</p></div>';
		echo '	<div class="icon"><i class="ion ion-'.$icon.'"></i></div>';
		echo '	<a href="actuator.php?id='.$device->id.'" class="small-box-footer">Anschauen <i class="fa fa-arrow-circle-right"></i></a>';
		echo '  </div>';
	echo '</div>';
}

function renderActuator($device)
{
	if($device->template === 'temperature') // Actuator or sensor only?
	{
		renderActuatorBox("red", "thermometer", round($device->attributes[0]->value, 1), $device->attributes[0]->unit, $device);

		if(array_key_exists(1, $device->attributes)) { // Humidity
			renderActuatorBox("aqua", "waterdrop", round($device->attributes[1]->value, 1), $device->attributes[1]->unit, $device);
		}

	} else if($device->template === 'inputTime') {
		renderActuatorBox("blue", "clock", $device->attributes[0]->value, "", $device);
	} else if($device->template === 'switch') {
		$icon = $device->attributes[0]->value == 1 ? "ion ion-toggle-filled" : "ion ion-toggle";
		renderActuatorBox("green", $icon, $device->attributes[0]->labels[!$device->attributes[0]->value], "", $device);
	} else if($device->template === 'input') {
		renderActuatorBox("yellow", "compose", $device->attributes[0]->value, "", $device);
	} else if($device->template === 'device') {
		//renderActuatorBox("aqua", "flash", $device->attributes[0]->value, "", $device);
		foreach($device->attributes as $attr)
		{
			//renderActuatorBox("aqua", "flash", $attr->label.' = '.$attr->value, "", $device);
			renderActuatorBox("aqua", "flash", $attr->value, $attr->label, $device);
		}
	} else {
		renderActuatorBox("gray", "help-circled", $device->attributes[0]->value, "", $device);
	}
}


function renderGraph($device)
{
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

function generateGraphData($device, $ids, $footerDataDyn)
{
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

    return $footerDataDyn;
}

?>
