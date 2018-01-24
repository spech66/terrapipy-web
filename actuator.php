<?php
$pageTitle = 'Aktoren';
$pageDescription = 'Alle Steuergeräte';
$pageSkin = 'black';
require_once("_header.php") ?>

<div class="row">

<?php
$devices = getDevices($pimaticUsername, $pimaticPassword, $pimaticHost);

usort($devices, function($b, $a) { // Reversed b/a so that the "ugly" devices are on the bottom
	return strcmp($a->template, $b->template);
});

function RenderBox($color, $icon, $header, $unit, $device)
{
	echo '<div class="col-lg-3 col-xs-6">';
		echo '  <div class="small-box bg-'.$color.'">';
		echo '	<div class="inner"><h3>'.$header.'<sup style="font-size: 20px">'.$unit.'</sup></h3><p>'.$device->name.'</p></div>';
		echo '	<div class="icon"><i class="ion ion-'.$icon.'"></i></div>';
		echo '	<a href="actuator.php?id='.$device->id.'" class="small-box-footer">Anschauen <i class="fa fa-arrow-circle-right"></i></a>';
		echo '  </div>';
	echo '</div>';
}

	foreach($devices as $device)
	{
           	//print_r($device);

		if($device->template === 'temperature') // Actuator or sensor only?
		{
			RenderBox("red", "thermometer", round($device->attributes[0]->value, 1), $device->attributes[0]->unit, $device);

			if(array_key_exists(1, $device->attributes)) { // Humidity
				RenderBox("aqua", "waterdrop", round($device->attributes[1]->value, 1), $device->attributes[1]->unit, $device);
			}

		} else if($device->template === 'inputTime') {
			RenderBox("blue", "clock", $device->attributes[0]->value, "", $device);
		} else if($device->template === 'switch') {
			$icon = $device->attributes[0]->value == 1 ? "ion ion-toggle-filled" : "ion ion-toggle";
			RenderBox("green", $icon, $device->attributes[0]->labels[!$device->attributes[0]->value], "", $device);
		} else if($device->template === 'input') {
			RenderBox("yellow", "compose", $device->attributes[0]->value, "", $device);
		} else if($device->template === 'device') {
			//RenderBox("aqua", "flash", $device->attributes[0]->value, "", $device);
			foreach($device->attributes as $attr)
			{
				//RenderBox("aqua", "flash", $attr->label.' = '.$attr->value, "", $device);
				RenderBox("aqua", "flash", $attr->value, $attr->label, $device);
			}
		} else {
			RenderBox("gray", "help-circled", $device->attributes[0]->value, "", $device);
		}
	}
?>

</div>
		
<?php require_once("_footer.php") ?>