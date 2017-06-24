<?php
class Rocket
{
    private $speed;
    private $explosion_area;
    private $massa;

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
    public function getExplosionArea()
    {
        return $this->explosion_area;
    }

    /**
     * @param mixed $explosion_area
     */
    public function setExplosionArea($explosion_area)
    {
        $this->explosion_area = $explosion_area;
    }

    /**
     * @return mixed
     */
    public function getMassa()
    {
        return $this->massa;
    }

    /**
     * @param mixed $massa
     */
    public function setMassa($massa)
    {
        $this->massa = $massa;
    }

    function Explosion_area()
    {
        $fire=$this->massa*3.8;
        return $fire;
    }
    function Speed()
    {
        echo 'Ракета летит со скоростью'.$this->speed;
    }
}