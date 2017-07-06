<?php
include ('Room.php');
include ('Flat.php');

function pre($item){
    echo "<pre>";
    print_r($item);
    echo "</pre>";
}

$room1= new Room(0,2);
$room1->addMan();
$room1->deleteMan();
$room1->getSostoyanie();
$room2= new Room(1,1);
$room2->addMan();
$room2->getSostoyanie();
$room2->door = 0;
$room2->deleteMan();


pre($room1);
pre($room2);

$flat1= new Flat();
$flat1->add_rooms($room1);
$flat1->add_rooms($room2);
//$flat1->del_rooms($room1);
$flat1->get_information();

