<?php
class Sewing_machine
{
    private $needle;
    private $thread;
    private $mechanism;

    /**
     * @return mixed
     */
    public function getNeedle()
    {
        return $this->needle;
    }

    /**
     * @param mixed $needle
     */
    public function setNeedle($needle)
    {
        $this->needle = $needle;
    }

    /**
     * @return mixed
     */
    public function getThread()
    {
        return $this->thread;
    }

    /**
     * @param mixed $thread
     */
    public function setThread($thread)
    {
        $this->thread = $thread;
    }

    /**
     * @return mixed
     */
    public function getMechanism()
    {
        return $this->mechanism;
    }

    /**
     * @param mixed $mechanism
     */
    public function setMechanism($mechanism)
    {
        $this->mechanism = $mechanism;
    }

    function Mechanism()
    {
        echo 'Ваша швейная машина имеет механизм:'.$this->mechanism;
    }
    function Crosslinking_speed($mechanism)
    {
        if($mechanism='electro')
        {echo 'Скорость сшивания 5 деталей в минуту';}
        else echo 'Скорость сшивания 1 деталь в минуту';
    }
}