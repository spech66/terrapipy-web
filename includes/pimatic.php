<?php
if(basename($_SERVER['PHP_SELF']) == basename(__FILE__))
{
	header('Location: /');
	exit;
}
?>

<?php
function getPages($pimaticUsername, $pimaticPassword, $pimaticHost, $pimaticTerrariumKeyword)
{
	$pageUrl = "http://$pimaticUsername:$pimaticPassword@$pimaticHost/api/pages";

	$curl = curl_init();
	$headers = array();
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($curl, CURLOPT_HEADER, 0);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_URL, $pageUrl);
	curl_setopt($curl, CURLOPT_TIMEOUT, 30);
	$json = curl_exec($curl);
	curl_close($curl);

	$pageData = json_decode($json);

	$terrarium = array();	
	foreach($pageData->pages as $page)
	{
		if(stripos($page->id, $pimaticTerrariumKeyword) !== false ||
			stripos($page->name, $pimaticTerrariumKeyword) !== false)
		{
			$terrarium[$page->id] = $page->name;
		}
	}
	
	// Test data
	//$terrarium['1'] = 'Terrarium 1';
	//$terrarium['2'] = 'Terrarium 2';

	return $terrarium;
}
?>