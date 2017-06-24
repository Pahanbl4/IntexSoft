<?php
class Hous{
    private $materials;
    private $number_storeys;
    private $number_entrances;

    /**
     * @return mixed
     */
    public function getMaterials()
    {
        return $this->materials;
    }

    /**
     * @param mixed $materials
     */
    public function setMaterials($materials)
    {
        $this->materials = $materials;
    }

    /**
     * @return mixed
     */
    public function getNumberStoreys()
    {
        return $this->number_storeys;
    }

    /**
     * @param mixed $number_storeys
     */
    public function setNumberStoreys($number_storeys)
    {
        $this->number_storeys = $number_storeys;
    }

    /**
     * @return mixed
     */
    public function getNumberEntrances()
    {
        return $this->number_entrances;
    }

    /**
     * @param mixed $number_entrances
     */
    public function setNumberEntrances($number_entrances)
    {
        $this->number_entrances = $number_entrances;
    }

    function Multistorey($number_storeys)
    {
        if($number_storeys>4)
            echo 'многоэтажка';
            else echo 'малоэтажка';
    }
    function Materials($materials)
    {return 'здание изгтовленно из '.$this->materials=$materials;}


}