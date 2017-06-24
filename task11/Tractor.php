<?php
class Tractor
{
    private $trailer;
    private $speed;
    private $mechanism;

    /**
     * @return mixed
     */
    public function getTrailer()
    {
        return $this->trailer;
    }

    /**
     * @param mixed $trailer
     */
    public function setTrailer($trailer)
    {
        $this->trailer = $trailer;
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
    public function getMechanism()
    {
        return $this->mechanism;
    }

    /**
     * @param mixed $mechanism
     */
    public function setMechanism($mechanism)
    {
        $this->mechanism = $mechanism;
    }


    function Burn_out_the_earth($ploshad,$speed)
    {
        $time=$ploshad/$speed;
        return $time;
    }
    function Speed($km,$ch)
    {
        $speed=$km/$ch;
        return $speed;
    }
}