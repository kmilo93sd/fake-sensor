<?php 

class Thermometer
{
	private static $min = 10;
	private static $max = 30;
	private static $coldMin = 0;
	private static $coldMax = 9.99;
	private static $hotMin = 30.01;
	private static $hotMax = 40;

	public static function measure()
	{
		$probability = mt_rand(0, 100);
		if ($probability <= 5) {
			return mt_rand(static::$coldMin*10, static::$coldMax*10)/10;
		}

		if ($probability >= 95) {
			return mt_rand(static::$hotMin*10, static::$hotMax*10)/10;
		}

		return mt_rand(static::$min*10, static::$max*10)/10;
	}
}