<?php
class Xbox
{
    private $memory;
    private $gamepad;
    private $games;

    /**
     * @return mixed
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * @param mixed $memory
     */
    public function setMemory($memory)
    {
        $this->memory = $memory;
    }

    /**
     * @return mixed
     */
    public function getGamepad()
    {
        return $this->gamepad;
    }

    /**
     * @param mixed $gamepad
     */
    public function setGamepad($gamepad)
    {
        $this->gamepad = $gamepad;
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

    function Amount_games($games)
    {
        echo 'У вас на платформе имееется игр в количестве'.$this->games;
    }
    function Start()
    {
        echo 'Вы включили Xbox';
    }

}