<?php
class Laptop
{
    private $sizescreen;
    private $megapixel_camera;
    private $firma;

    /**
     * @return mixed
     */
    public function getSizescreen()
    {
        return $this->sizescreen;
    }

    /**
     * @param mixed $sizescreen
     */
    public function setSizescreen($sizescreen)
    {
        $this->sizescreen = $sizescreen;
    }

    /**
     * @return mixed
     */
    public function getMegapixelCamera()
    {
        return $this->megapixel_camera;
    }

    /**
     * @param mixed $megapixel_camera
     */
    public function setMegapixelCamera($megapixel_camera)
    {
        $this->megapixel_camera = $megapixel_camera;
    }

    /**
     * @return mixed
     */
    public function getFirma()
    {
        return $this->firma;
    }

    /**
     * @param mixed $firma
     */
    public function setFirma($firma)
    {
        $this->firma = $firma;
    }
    function sizeScreen($sizescreen)
    {
        echo "Размер экрана этого ноутбука равна ".$this->sizescreen=$sizescreen;
    }
    function megapixel_camera($camera)
    {
        echo "В камере этого ноута ".$this->megapixel_camera=$camera;
    }
}