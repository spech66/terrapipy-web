<?php
if(basename($_SERVER['PHP_SELF']) == basename(__FILE__))
{
	header('Location: /');
	exit;
}
?>

<?php
function getPages()
{
	$terrarium['1'] = 'Terrarium 1';
	$terrarium['2'] = 'Terrarium 2';
	return $terrarium;
}
?>