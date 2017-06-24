<?php
class Guitar
{
    /**
     * @var bool
     */
    private $playing;
    /**
     * @var int
     *
     */
    private $number_strings;
    /**
     * @var string
     */
    private $color;

    /**
     * @return bool
     */
    public function isPlaying(): bool
    {
        return $this->playing;
    }

    /**
     * @param bool $playing
     */
    public function setPlaying(bool $playing)
    {
        $this->playing = $playing;
    }

    /**
     * @return int
     */
    public function getNumberStrings(): int
    {
        return $this->number_strings;
    }

    /**
     * @param int $number_strings
     */
    public function setNumberStrings(int $number_strings)
    {
        $this->number_strings = $number_strings;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color)
    {
        $this->color = $color;
    }


    function On()
    {return $this->playing=1;}
    function Off()
    {return $this->playing=0;}

    function NamberStrings($number_strings)
    {
        echo 'namber of strings is'.$number_strings;
    }
}
