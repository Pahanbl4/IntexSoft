<?php
class School{
    private $amountClases;
    private $ticher;
    private $student;

    /**
     * @return mixed
     */
    public function getAmountClases()
    {
        return $this->amountClases;
    }

    /**
     * @param mixed $amountClases
     */
    public function setAmountClases($amountClases)
    {
        $this->amountClases = $amountClases;
    }

    /**
     * @return mixed
     */
    public function getTicher()
    {
        return $this->ticher;
    }

    /**
     * @param mixed $ticher
     */
    public function setTicher($ticher)
    {
        $this->ticher = $ticher;
    }

    /**
     * @return mixed
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * @param mixed $student
     */
    public function setStudent($student)
    {
        $this->student = $student;
    }

    function AmountClases($flore,$amountClases)
    {
        $koll=$flore*$amountClases;
        return $koll;
    }
    function WorkTime($time)
    {
        if($time>8 & $time<17)
            echo 'School working';
        else echo 'School closes';
    }
}