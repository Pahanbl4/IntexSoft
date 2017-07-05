<?php
include ('Room.php');
include ('Flat.php');

function pre($item){
    echo "<pre>";
    print_r($item);
    echo "</pre>";
}

$room1= new Room(0,3);
$room1->addMan();
$room1->deleteMan();
$room1->getSostoyanie();
pre($room1);

$flat1= new Flat();
$flat1->add_rooms($room1);
//$flat1->del_rooms($room1);
$flat1->get_information();
pre($flat1);
