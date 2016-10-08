<?php
if(basename($_SERVER['PHP_SELF']) == basename(__FILE__))
{
	header('Location: /');
	exit;
}
?>

<?php
function getPimaticData($pimaticUsername, $pimaticPassword, $pimaticHost, $pimaticUrl)
{
	$pageUrl = "http://$pimaticUsername:$pimaticPassword@$pimaticHost$pimaticUrl";

	$curl = curl_init();
	$headers = array();
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($curl, CURLOPT_HEADER, 0);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_URL, $pageUrl);
	curl_setopt($curl, CURLOPT_TIMEOUT, 30);
	$json = curl_exec($curl);
	curl_close($curl);

	return json_decode($json);
}

function getPages($pimaticUsername, $pimaticPassword, $pimaticHost, $pimaticTerrariumKeyword)
{
	$pageData = getPimaticData($pimaticUsername, $pimaticPassword, $pimaticHost, "/api/pages");

	$terrarium = array();	
	foreach($pageData->pages as $page)
	{
		if(stripos($page->id, $pimaticTerrariumKeyword) !== false ||
			stripos($page->name, $pimaticTerrariumKeyword) !== false)
		{
			$terrarium[$page->id] = $page;
		}
	}
	
	// Test data
	//$terrarium['1'] = 'Terrarium 1';
	//$terrarium['2'] = 'Terrarium 2';

	return $terrarium;
}

function getRules($pimaticUsername, $pimaticPassword, $pimaticHost)
{
	$pageData = getPimaticData($pimaticUsername, $pimaticPassword, $pimaticHost, "/api/rules");

	$rules = array();	
	foreach($pageData->rules as $rule)
	{
		$rules[$rule->id] = $rule;
	}

	return $rules;
}

function getVariables($pimaticUsername, $pimaticPassword, $pimaticHost)
{
	$pageData = getPimaticData($pimaticUsername, $pimaticPassword, $pimaticHost, "/api/variables");

	$variables = array();	
	foreach($pageData->variables as $variable)
	{
		$variables[$variable->id] = $variable;
	}

	return $variables;
}

function getDevices($pimaticUsername, $pimaticPassword, $pimaticHost)
{
	$pageData = getPimaticData($pimaticUsername, $pimaticPassword, $pimaticHost, "/api/devices");

	$devices = array();	
	foreach($pageData->devices as $device)
	{
		$devices[$device->id] = $device;
	}

	return $devices;
}

function deviceOnPage($deviceId, $pageId, $terrariumPages)
{
	foreach($terrariumPages as $tp)
	{
		if($pageId !== $tp->id)
			continue;

		foreach($tp->devices as $d)
		{
			//echo $d->deviceId."<br>";
			//echo $deviceId."<br>";
			if($d->deviceId === $deviceId)
				return true;
		}
	}

	return false;
}

?>