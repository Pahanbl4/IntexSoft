<?php
class Helicopter
{
    private $turntables;
    private $speed;
    private $places;

    /**
     * @return mixed
     */
    public function getTurntables()
    {
        return $this->turntables;
    }

    /**
     * @param mixed $turntables
     */
    public function setTurntables($turntables)
    {
        $this->turntables = $turntables;
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

    /**
     * @return mixed
     */
    public function getPlaces()
    {
        return $this->places;
    }

    /**
     * @param mixed $places
     */
    public function setPlaces($places)
    {
        $this->places = $places;
    }

    function Speed($turntables)
    {
        $this->speedspeed=$turntables*200;
        return $this->speed;
    }
    function MaxPlase()
    {
        echo 'Вертолет не может унести больше 7 человек';
    }
}