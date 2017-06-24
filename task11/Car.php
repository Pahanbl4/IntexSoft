<?php
class Car
{
    /**
     * @var int
     */
    private $speed;
    /**
     * @var string
     */
    private $color;
    /**
     * @var double
     */
    private $oil;

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
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getOil()
    {
        return $this->oil;
    }

    /**
     * @param mixed $oil
     */
    public function setOil($oil)
    {
        $this->oil = $oil;
    }


    function Amount_fuel($oil){
        echo 'The amount of fuel is'.$oil;
    }
    function new_color(){
        return $this->color;
    }
}
function pre($item){
    echo "<pre>";
    print_r($item);
    echo "</pre>";
}

$car1= new Car();
$car1->setOil(20);
$car1->setColor('green');
$car1->setSpeed(100);

$col= $car1->getColor('Green');

echo "new color in the car =".$col;
echo pre($car1);


