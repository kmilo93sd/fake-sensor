<?php 

class Thermometer
{
	private static $min = 10;
	private static $max = 30;
	private static $coldMin = 0;
	private static $coldMax = 9.99;
	private static $hotMin = 30.01;
	private static $hotMax = 40;

	public static function measure(Weather $weather)
	{
		
		if ($weather->isCold()) {
			return static::randomInRange(static::$coldMin, static::$coldMax);
		}

		if ($weather->isHot()) {
			return static::randomInRange(static::$hotMin, static::$hotMax);
		}

		return static::randomInRange(static::$min, static::$max);
	}

	private static function randomInRange($min, $max)
	{
		return mt_rand($min*10, $max*10)/10;
	}
}