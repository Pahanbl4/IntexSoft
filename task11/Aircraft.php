<?php
class Aircraft
{
    private $fly;
    private $Places;
    private $clases;

    /**
     * @return mixed
     */
    public function getFly()
    {
        return $this->fly;
    }

    /**
     * @param mixed $fly
     */
    public function setFly($fly)
    {
        $this->fly = $fly;
    }

    /**
     * @return mixed
     */
    public function getPlaces()
    {
        return $this->Places;
    }

    /**
     * @param mixed $Places
     */
    public function setPlaces($Places)
    {
        $this->Places = $Places;
    }

    /**
     * @return mixed
     */
    public function getClases()
    {
        return $this->clases;
    }

    /**
     * @param mixed $clases
     */
    public function setClases($clases)
    {
        $this->clases = $clases;
    }


    function Prise_class($money)
    {
        if($money>250)
            echo 'Вам хватает на бизнесс класс';
        else echo 'Выберите что подешевле';
    }
    function Midle_Speed()
    {
        echo 'Средняя скорость самолета равно 800км\ч';
    }
}