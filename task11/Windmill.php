<?php
class Windmill
{
    private $rotor;
    private $hight;
    private $power;

    /**
     * @return mixed
     */
    public function getRotor()
    {
        return $this->rotor;
    }

    /**
     * @param mixed $rotor
     */
    public function setRotor($rotor)
    {
        $this->rotor = $rotor;
    }

    /**
     * @return mixed
     */
    public function getHight()
    {
        return $this->hight;
    }

    /**
     * @param mixed $hight
     */
    public function setHight($hight)
    {
        $this->hight = $hight;
    }

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @param mixed $power
     */
    public function setPower($power)
    {
        $this->power = $power;
    }


    function calc_power($p,$S,$V)
    {
        $N=$p*$S*$V*$V*$V/2;
        return $N;
    }
    function Energy()
    {
        echo 'Средний ветрогенератор выробаывает в день 1000ват';
    }
}