<?php
class VacuumCleaner
{
    private $size_hose;
    private $amount_vat;
    private $weight;

    /**
     * @return mixed
     */
    public function getSizeHose()
    {
        return $this->size_hose;
    }

    /**
     * @param mixed $size_hose
     */
    public function setSizeHose($size_hose)
    {
        $this->size_hose = $size_hose;
    }

    /**
     * @return mixed
     */
    public function getAmountVat()
    {
        return $this->amount_vat;
    }

    /**
     * @param mixed $amount_vat
     */
    public function setAmountVat($amount_vat)
    {
        $this->amount_vat = $amount_vat;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    function Weight($weight)
    {
        return  'этот пылесос весит'.$this->weight=$weight."килограмм";
    }
    function Strengtch($amount_vat){
        if ($amount_vat>100)
            echo 'сильный пылесос';
            else{echo 'cлабый пылесос';}
    }
}
$we= new VacuumCleaner();
$we->Weight(20);
print_r($we);