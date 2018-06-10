<?php 
require 'Thermometer.php';

$method = $_SERVER['REQUEST_METHOD'];
$requestUri = $_SERVER['REQUEST_URI'];

if ($method === 'GET' && $requestUri === '/measure') {

	$response = [ 
		'temperature' => Thermometer::measure()
		 ];
	echo  json_encode($response);
}