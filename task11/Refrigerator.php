<?php
class Refrigerator{
    private $temperature;
    private $number_shelves;
    private $weight;

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

    /**
     * @return mixed
     */
    public function getNumberShelves()
    {
        return $this->number_shelves;
    }

    /**
     * @param mixed $number_shelves
     */
    public function setNumberShelves($number_shelves)
    {
        $this->number_shelves = $number_shelves;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    function weight($weight)
    {return 'холодильник имеет высоту'.$this->weight=$weight;}
    function heat_loss($temperature,$time_open){
        $tem=$temperature/($time_open*0.1);
        return $tem;
}

}