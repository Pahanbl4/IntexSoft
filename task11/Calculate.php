<?php
class Calculate{
    private $addition;
    private $subtraction;
    private $multiplication;

    /**
     * @return mixed
     */
    public function getAddition()
    {
        return $this->addition;
    }

    /**
     * @param mixed $addition
     */
    public function setAddition($addition)
    {
        $this->addition = $addition;
    }

    /**
     * @return mixed
     */
    public function getSubtraction()
    {
        return $this->subtraction;
    }

    /**
     * @param mixed $subtraction
     */
    public function setSubtraction($subtraction)
    {
        $this->subtraction = $subtraction;
    }

    /**
     * @return mixed
     */
    public function getMultiplication()
    {
        return $this->multiplication;
    }

    /**
     * @param mixed $multiplication
     */
    public function setMultiplication($multiplication)
    {
        $this->multiplication = $multiplication;
    }

    function addition($a,$b)
    {$c=$a+$b;
    return $c;}
    function multiplication($a,$b){
        $c=$a*$b;
        return $c;
    }
}