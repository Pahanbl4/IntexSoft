<?php
class Cake{
    private $massa;
    private $kcal;
    private $testo;

    /**
     * @return mixed
     */
    public function getMassa()
    {
        return $this->massa;
    }

    /**
     * @param mixed $massa
     */
    public function setMassa($massa)
    {
        $this->massa = $massa;
    }

    /**
     * @return mixed
     */
    public function getKcal()
    {
        return $this->kcal;
    }

    /**
     * @param mixed $kcal
     */
    public function setKcal($kcal)
    {
        $this->kcal = $kcal;
    }

    /**
     * @return mixed
     */
    public function getTesto()
    {
        return $this->testo;
    }

    /**
     * @param mixed $testo
     */
    public function setTesto($testo)
    {
        $this->testo = $testo;
    }

    function kolorijnost($kcal)
    {
        if ($kcal>1000)
            echo 'Высоко колорийный';
        else echo 'Низколорийный';
    }
    function Coking($massa)
    {
        $time=$massa*100;
        return $time;
    }
}
