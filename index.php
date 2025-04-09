<?php
//Henter klassen med metode
require_once 'classes/PrintArgument.php';

//Opretter objekt af klassen
$myMessage = new PrintArgument;

//Kalder metoden til udskrift
$myMessage->print_message("Dette er min anden method");