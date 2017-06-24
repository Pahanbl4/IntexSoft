<?php
class Phone{
    private $call;
    private $calculate;
    private $games;

    /**
     * @return mixed
     */
    public function getCall()
    {
        return $this->call;
    }

    /**
     * @param mixed $call
     */
    public function setCall($call)
    {
        $this->call = $call;
    }

    /**
     * @return mixed
     */
    public function getCalculate()
    {
        return $this->calculate;
    }

    /**
     * @param mixed $calculate
     */
    public function setCalculate($calculate)
    {
        $this->calculate = $calculate;
    }

    /**
     * @return mixed
     */
    public function getGames()
    {
        return $this->games;
    }

    /**
     * @param mixed $games
     */
    public function setGames($games)
    {
        $this->games = $games;
    }

    function calculate(int $a,int $b){
        $c=$a+$b;
        return $c;
    }
    function call($name)
    {
        echo 'you call '.$name;
    }

}