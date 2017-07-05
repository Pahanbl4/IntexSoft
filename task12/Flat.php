<?php
class Flat
{
    public $rooms = [];
//
//    /**
//     * Flat constructor.
//     * @param array $rooms
//     */
//    public function __construct(array $rooms)
//    {
//        $this->rooms = $rooms;
//    }


    function add_rooms($room)
    {
        $this->rooms[]=$room;
        return $this->rooms;
    }
    function del_rooms($room)
    {
        unset($room[array_search('somevalue', $room)]);
        return $this->rooms;
    }
    function get_information()
    {
      $koll=count($this->rooms);
        foreach ($this->rooms as $element)
       {
          echo print_r($element). '<br>';
        }
        echo 'количество комнат ='.$koll;
    }
}