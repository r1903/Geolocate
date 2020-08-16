<?php

	require "vendor/autoload.php";

	$geocoder = new \OpenCage\Geocoder\Geocoder('98cf03024b8046b9827dd3f64c966131');
	
	$result = $geocoder->geocode('51.952659, 7.632473', ['language' => 'fr']); 

	
	header('Content-Type: application/json; charset=UTF-8');
	echo json_encode($result, JSON_UNESCAPED_UNICODE);
	
?>
