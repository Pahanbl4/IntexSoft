<?php
class Room
{
    public $door;
    public $window;
    public $people;
    /**
     * room constructor.
     * @param $door
     */
    public function __construct($door,$window)
    {
        $this->window = $window;
        $this->door = $door;
    }

    public function addMan()
    {
        If ($this->door == 0) $this->people++;
    }

    public function deleteMan()
    {
        if ( $this->door == 0) $this->people--;
    }
    public function getSostoyanie()
    {
        $a[] = $this->people;
        if ($this->people > 0)
            $a[] = 'gorit';
        else $a[] = 'ne gorit';
        print_r($a);
    }
}