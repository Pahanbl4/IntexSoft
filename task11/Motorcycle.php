<?php
class Motorcycle
{
    private $color;
    private $amount_seats;
    private $volume_tank;

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
    public function getAmountSeats()
    {
        return $this->amount_seats;
    }

    /**
     * @param mixed $amount_seats
     */
    public function setAmountSeats($amount_seats)
    {
        $this->amount_seats = $amount_seats;
    }

    /**
     * @return mixed
     */
    public function getVolumeTank()
    {
        return $this->volume_tank;
    }

    /**
     * @param mixed $volume_tank
     */
    public function setVolumeTank($volume_tank)
    {
        $this->volume_tank = $volume_tank;
    }

    function Volume_Tank($massa)
    {
        $volume_tank=$massa*0.1;
        return $volume_tank;
    }
    function Seats($amount_seats)
    {
        echo 'В этом мотоциуле количество сидений равно '.$amount_seats;
    }
}