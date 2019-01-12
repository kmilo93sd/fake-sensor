<?php 
require 'Thermometer.php';
require 'weather.php';

$method = $_SERVER['REQUEST_METHOD'];
$requestUri = $_SERVER['REQUEST_URI'];

if ($method === 'GET' && $requestUri === '/measure') {

	$response = [ 
		'temperature' => Thermometer::measure(Weather::random())
		 ];
	echo  json_encode($response);
}