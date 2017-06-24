<?php
class Coffee_machine
{
    private $delivery;
    private $speed;
    private $kinds;

    /**
     * @return mixed
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * @param mixed $delivery
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
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
    public function getKinds()
    {
        return $this->kinds;
    }

    /**
     * @param mixed $kinds
     */
    public function setKinds($kinds)
    {
        $this->kinds = $kinds;
    }

    function Counting_change($cost ,$cash)
    {
$delivery = $cash-$cost;
return 'Ваша сдача равна'.$delivery;
    }
    function Coffee_ready()
    {
        echo 'Ваше коффе готов:)';
    }
}