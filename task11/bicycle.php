<?php
class bicycle
{
    private $speed;
    private $amount_stars;
    private $wheel_size;

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
    public function getAmountStars()
    {
        return $this->amount_stars;
    }

    /**
     * @param mixed $amount_stars
     */
    public function setAmountStars($amount_stars)
    {
        $this->amount_stars = $amount_stars;
    }

    /**
     * @return mixed
     */
    public function getWheelSize()
    {
        return $this->wheel_size;
    }

    /**
     * @param mixed $wheel_size
     */
    public function setWheelSize($wheel_size)
    {
        $this->wheel_size = $wheel_size;
    }

    function max_Speed($speed)
    {
        if($speed<60)
            echo "it is speed good";
        else {echo "Danger";}
    }
    function wheel_size($wheel_size)
    {
        return "Ваш велосипед имеет колеса в размере".$this->wheel_size=$wheel_size."dm";
    }
}