<?php
class Electric_kettle
{
    private $volume;
    private $vat;
    private $speed_hot;

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
    public function getSpeedHot()
    {
        return $this->speed_hot;
    }

    /**
     * @param mixed $speed_hot
     */
    public function setSpeedHot($speed_hot)
    {
        $this->speed_hot = $speed_hot;
    }

    function Heating_rate($volume)
    {
        $time=$volume*0.4;
        return $time;
    }
    function Expended_energy($time)
    {
        $energy=$time*2.3;
        return $energy;
    }
}