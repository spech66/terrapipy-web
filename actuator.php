<?php
$pageTitle = 'Aktoren';
$pageDescription = 'Alle Steuergeräte';
$pageSkin = 'black';
require_once("_header.php") ?>

<div class="row">

<?php
$devices = getDevices($pimaticUsername, $pimaticPassword, $pimaticHost);

usort($devices, function($a, $b) {
	return strcmp($a->template, $b->template);
});

	foreach($devices as $device)
	{
           	//print_r($device);

		if($device->template === 'temperature') // Actuator or sensor only?
		{
			echo '<div class="col-lg-3 col-xs-6">';
			echo '  <div class="small-box bg-red">';
			echo '	<div class="inner"><h3>'.round($device->attributes[0]->value, 1).'<sup style="font-size: 20px">'.$device->attributes[0]->unit.'</sup></h3><p>'.$device->name.'</p></div>';
			echo '	<div class="icon"><i class="ion ion-thermometer"></i></div>';
			echo '	<a href="actuator.php?id='.$device->id.'" class="small-box-footer">Anschauen <i class="fa fa-arrow-circle-right"></i></a>';
			echo '  </div>';
			echo '</div>';

			if(array_key_exists(1, $device->attributes)) {
				echo '<div class="col-lg-3 col-xs-6">';
				echo '  <div class="small-box bg-aqua">';
				echo '	<div class="inner"><h3>'.round($device->attributes[1]->value, 1).'<sup style="font-size: 20px">'.$device->attributes[1]->unit.'</sup></h3><p>'.$device->name.'</p></div>';
				echo '	<div class="icon"><i class="ion ion-waterdrop"></i></div>';
				echo '	<a href="actuator.php?id='.$device->id.'" class="small-box-footer">Anschauen <i class="fa fa-arrow-circle-right"></i></a>';
				echo '  </div>';
				echo '</div>';
			}

		} else if($device->template === 'inputTime') {
			echo '<div class="col-lg-3 col-xs-6">';
			echo '  <div class="small-box bg-blue">';
			echo '	<div class="inner"><h3>'.$device->attributes[0]->value.'</h3><p>'.$device->name.'</p></div>';
			echo '	<div class="icon"><i class="ion ion-clock"></i></div>';
			echo '	<a href="actuator.php?id='.$device->id.'" class="small-box-footer">Anschauen <i class="fa fa-arrow-circle-right"></i></a>';
			echo '  </div>';
			echo '</div>';
		} else if($device->template === 'switch') {
			echo '<div class="col-lg-3 col-xs-6">';
			echo '  <div class="small-box bg-green">';
			echo '	<div class="inner"><h3>'.$device->attributes[0]->labels[$device->attributes[0]->value].'</h3><p>'.$device->name.'</p></div>';
			if($device->attributes[0]->value == 1) {
				echo '	<div class="icon"><i class="ion ion-toggle-filled"></i></div>';
			} else {
				echo '	<div class="icon"><i class="ion ion-toggle"></i></div>';
			}
			echo '	<a href="actuator.php?id='.$device->id.'" class="small-box-footer">Anschauen <i class="fa fa-arrow-circle-right"></i></a>';
			echo '  </div>';
			echo '</div>';
		} else if($device->template === 'input') {
			echo '<div class="col-lg-3 col-xs-6">';
			echo '  <div class="small-box bg-yellow">';
			echo '	<div class="inner"><h3>'.$device->attributes[0]->value.'</h3><p>'.$device->name.'</p></div>';
			echo '	<div class="icon"><i class="ion ion-compose"></i></div>';
			echo '	<a href="actuator.php?id='.$device->id.'" class="small-box-footer">Anschauen <i class="fa fa-arrow-circle-right"></i></a>';
			echo '  </div>';
			echo '</div>';
		} else if($device->template === 'device') {
			echo '<div class="col-lg-3 col-xs-6">';
			echo '  <div class="small-box bg-aqua">';
			foreach($device->attributes as $attr)
			{
				echo '	<div class="inner"><h3>'.$attr->label.' = '.$attr->value.'</h3></div>';
			}
			echo '  <div class="inner"><p>'.$device->name.'</p></div>';
			echo '	<div class="icon"><i class="ion ion-flash"></i></div>';
			echo '	<a href="actuator.php?id='.$device->id.'" class="small-box-footer">Anschauen <i class="fa fa-arrow-circle-right"></i></a>';
			echo '  </div>';
			echo '</div>';
		} else {
			echo '<div class="col-lg-3 col-xs-6">';
			echo '  <div class="small-box bg-gray">';
			echo '	<div class="inner"><h3>'.$device->attributes[0]->value.'</h3><p>'.$device->name.'</p></div>';
			echo '	<div class="icon"><i class="ion ion-help-circled"></i></div>';
			echo '	<a href="actuator.php?id='.$device->id.'" class="small-box-footer">Anschauen <i class="fa fa-arrow-circle-right"></i></a>';
			echo '  </div>';
			echo '</div>';
		}
	}
?>

</div>
		
<?php require_once("_footer.php") ?>