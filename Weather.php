<?php

class Weather
{
    protected $climateIndex;

    public function __construct(float $climateIndex)
    {
        $this->climateIndex = $climateIndex;
    }

    public static function random()
    {
        return new Weather(mt_rand(0, 100));
    }

    public function isCold():bool
    {
        if ($this->climateIndex <= 5) {
			return true;
        }
        
        return false;
    }

    public function isHot():bool
    {
        if($this->climateIndex >= 95){
            return true;
        }

        return false;
    }
}