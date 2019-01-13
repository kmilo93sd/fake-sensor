<?php

class Weather
{
    protected $min = 10;

	protected $max = 30;
    
    protected $coldMin = 0;
    
    protected $coldMax = 9.99;
    
    protected $hotMin = 30.01;
    
    protected $hotMax = 40;

    protected $themperature;

    public function __construct(float $climateIndex)
    {
        $this->themperature = $this->generateThemperature($climateIndex);
    }

    protected function generateThemperature(float $climateIndex):float
    {
        if($this->isTooCold($climateIndex)){
            return $this->randomInRange($this->coldMin, $this->coldMax);
        }

        if($this->isTooHot($climateIndex)){
            return $this->randomInRange($this->hotMin, $this->hotMax);
        }

        return $this->randomInRange($this->min, $this->max);
    }

    protected function isTooCold(float $climateIndex):bool
    {
        if($climateIndex <= 5){
            return true;
        }
        return false;
    }

    protected function isTooHot(float $climateIndex):bool
    {
        if($climateIndex >=95){
            return true;
        }
        return false;
    }

    protected function randomInRange($min, $max):float
	{
		return mt_rand($min*10, $max*10)/10;
    }
    
    public static function random():Weather
    {
        return new Weather(mt_rand(0, 100));
    }

    public function themperature():float
    {
        return $this->themperature;
    }
}