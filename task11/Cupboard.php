<?php
class Cupboard
{
    private $door;
    private $shelves;
    private $hangers;

    /**
     * @return mixed
     */
    public function getDoor()
    {
        return $this->door;
    }

    /**
     * @param mixed $door
     */
    public function setDoor($door)
    {
        $this->door = $door;
    }

    /**
     * @return mixed
     */
    public function getShelves()
    {
        return $this->shelves;
    }

    /**
     * @param mixed $shelves
     */
    public function setShelves($shelves)
    {
        $this->shelves = $shelves;
    }

    /**
     * @return mixed
     */
    public function getHangers()
    {
        return $this->hangers;
    }

    /**
     * @param mixed $hangers
     */
    public function setHangers($hangers)
    {
        $this->hangers = $hangers;
    }

    function Amount_hangers($hangers,$width)
    {
        $amount=$width/$hangers;
        return $amount;
    }
    function mirror_yes_or_no($door)
    {
        if($door>100)
            echo 'mirror there is';
            else echo 'mirror no';
    }
}