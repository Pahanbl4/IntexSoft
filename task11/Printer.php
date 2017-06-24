<?php
class Printer{
    private $print;
    private $scan;
    private $xerox;

    /**
     * @return mixed
     */
    public function getPrint()
    {
        return $this->print;
    }

    /**
     * @param mixed $print
     */
    public function setPrint($print)
    {
        $this->print = $print;
    }

    /**
     * @return mixed
     */
    public function getScan()
    {
        return $this->scan;
    }

    /**
     * @param mixed $scan
     */
    public function setScan($scan)
    {
        $this->scan = $scan;
    }

    /**
     * @return mixed
     */
    public function getXerox()
    {
        return $this->xerox;
    }

    /**
     * @param mixed $xerox
     */
    public function setXerox($xerox)
    {
        $this->xerox = $xerox;
    }

    function  Print_for_minut($koll)
    {
        $print=$koll*0.3;
        return $print;
    }
    function Scan_for_minut($koll)
    {
        $scan=$koll*0.7;
        return $scan;
    }
}