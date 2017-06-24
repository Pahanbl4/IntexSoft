<?php
class Washer
{
    private $mark;
    private $number_programs;
    private $volume;

    /**
     * @return mixed
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * @param mixed $mark
     */
    public function setMark($mark)
    {
        $this->mark = $mark;
    }

    /**
     * @return mixed
     */
    public function getNumberPrograms()
    {
        return $this->number_programs;
    }

    /**
     * @param mixed $number_programs
     */
    public function setNumberPrograms($number_programs)
    {
        $this->number_programs = $number_programs;
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

    function Calc_volume($s,$h)
    {
        $v=$s*$h;
        return $v;
    }
    function GoodOrBad($number_programs)
    {
        if ($number_programs>4)
            echo 'good machine';
            else {'bad machine';}
    }
}