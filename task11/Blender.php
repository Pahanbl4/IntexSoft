<?php
class Blender
{
    private $volume;
    private $vat;
    private $speed;

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
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param mixed $vat
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    function Rpm($speed,$time)
    {$rpm=$speed*$time;
    return $rpm;}
    function Volume()
    {
        echo 'чаша имеет объем равное'.$this->volume;
    }
}