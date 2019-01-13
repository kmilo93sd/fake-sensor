<?php 

class Thermometer
{
	public static function measure(Weather $weather):float
	{
		return $weather->themperature();
	}
}