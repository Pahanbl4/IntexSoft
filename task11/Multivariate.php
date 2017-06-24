<?php
class Multivariate
{
    private $volume;
    private $programs;
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
    public function getPrograms()
    {
        return $this->programs;
    }

    /**
     * @param mixed $programs
     */
    public function setPrograms($programs)
    {
        $this->programs = $programs;
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

    function Soup_cooking($weight,$woter)
    {
$time=$weight*$woter/10;
return $time;
    }
    function End()
    {
        echo "Ваше блюдо готово";
    }
}