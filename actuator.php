<?php
$pageTitle = 'Aktoren';
$pageDescription = 'Alle Steuergeräte';
$pageSkin = 'black';
require_once("_header.php") ?>

<div class="row">

<?php
$id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : "";
$devices = getDevices($pimaticUsername, $pimaticPassword, $pimaticHost);

usort($devices, function($b, $a) { // Reversed b/a so that the "ugly" devices are on the bottom
	return strcmp($a->template, $b->template);
});

foreach($devices as $device)
{
       	//print_r($device); // DEBUG

	if($id != "" && $id != $device->id)
		continue;

	renderActuator($device);
}
?>

</div>
		
<?php require_once("_footer.php") ?>