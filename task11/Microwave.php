<?php
class Microwave{
    private $warmup;
    private $color;
    private $volume;

    /**
     * @return mixed
     */
    public function getWarmup()
    {
        return $this->warmup;
    }

    /**
     * @param mixed $warmup
     */
    public function setWarmup($warmup)
    {
        $this->warmup = $warmup;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
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

    function Calculatio_volume(double $s,double $h)
    {
        $v=$s*$h;
        return $v;
    }
    function WarmUpForTime($gram)
    {
$kol=$gram*2;
return $kol."\n".'ceкунд';
    }
}