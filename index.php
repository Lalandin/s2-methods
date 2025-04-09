<?php
//Henter klassen fra PrintMessage.php
require 'classes/PrintMessage.php';

//Opretter nyt objekt af klassen
$myMessage = new PrintMessage;

//Bruger metoden i klassen
$myMessage->print_message();