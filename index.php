<?php
//Indlæser klassen
require_once 'classes/Computer.php';

//Opretter nyt objekt af klassen
$myPC = new Computer;

//Indsætter info
$myPC->set_name("Acer Aspire XC-1780 i5-13/16/512 stationær computer");
$myPC->set_processor("Intel® Core™ i5 13400-processor");
$myPC->set_ram("16GB DDR4 RAM");
$myPC->set_graphics("Intel UHD Graphics 730");
$myPC->set_storage("512GB SSD");
$myPC->set_os("Windows 11 Home");

//Udskriver info
echo $myPC->get_name() . "<br>";
echo $myPC->get_processor() . "<br>";
echo $myPC->get_ram() . "<br>";
echo $myPC->get_graphics() . "<br>";
echo $myPC->get_storage() . "<br>";
echo $myPC->get_os() . "<br>";