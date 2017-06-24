<?php
class TV{
    private $sound;
    private $brightness;
    private $formatTV;

    /**
     * @return mixed
     */
    public function getSound()
    {
        return $this->sound;
    }

    /**
     * @param mixed $sound
     */
    public function setSound($sound)
    {
        $this->sound = $sound;
    }

    /**
     * @return mixed
     */
    public function getBrightness()
    {
        return $this->brightness;
    }

    /**
     * @param mixed $brightness
     */
    public function setBrightness($brightness)
    {
        $this->brightness = $brightness;
    }

    /**
     * @return mixed
     */
    public function getFormatTV()
    {
        return $this->formatTV;
    }

    /**
     * @param mixed $formatTV
     */
    public function setFormatTV($formatTV)
    {
        $this->formatTV = $formatTV;
    }

    function Amount_sound($sound)
    {
        echo $this->sound=$sound."dcb";
    }
    function brightness_procent($kollproc)
    {
        if($kollproc<50)
            echo "Не ярко";
        else{
            if($kollproc>50){

            }echo "Телевизор показывает ярко";}
    }
}