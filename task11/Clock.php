<?php
class Clock
{
    private $arrows;
    private $mechanism;
    private $gears;

    /**
     * @return mixed
     */
    public function getArrows()
    {
        return $this->arrows;
    }

    /**
     * @param mixed $arrows
     */
    public function setArrows($arrows)
    {
        $this->arrows = $arrows;
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

    /**
     * @return mixed
     */
    public function getGears()
    {
        return $this->gears;
    }

    /**
     * @param mixed $gears
     */
    public function setGears($gears)
    {
        $this->gears = $gears;
    }

    function Speed()
    {
        echo 'Большая стрелка часов двигается со скоростью 60 тиков в секунду';
    }
    function Mechanism()
    {
        if($mechanism='electro')
            echo 'эти часы электрические';
        else echo 'Эти часы механические';
    }

}