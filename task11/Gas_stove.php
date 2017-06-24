<?php
class Gas_stove
{
    private $number_burners;
    private $volume;
    private $temperature;

    /**
     * @return mixed
     */
    public function getNumberBurners()
    {
        return $this->number_burners;
    }

    /**
     * @param mixed $number_burners
     */
    public function setNumberBurners($number_burners)
    {
        $this->number_burners = $number_burners;
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param mixed $volume
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    /**
     * @return mixed
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @param mixed $temperature
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
    }

    function Baking($massa,$temperature)
    {
        $time=$massa*$temperature;
        return $time;
    }
    function cooking($typ,$temperature)
    {
        $time=$typ*$temperature*20;
        return $time;
    }
}