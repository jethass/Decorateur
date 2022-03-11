<?php
require('vendor/autoload.php');
use App\Hello;
use App\BirthdayHelloDecorator;
use App\CaVaHelloDecorator;

$hello = new Hello(); 

$helloBirthday = new BirthdayHelloDecorator($hello); 
echo $helloBirthday->sayHello('Marc'); // Bonjour Marc. Joyeux anniversaire !'

$helloCava = new CaVaHelloDecorator($hello); 
echo $helloCava->sayHello('Marc'); // Bonjour Marc. Joyeux anniversaire ! Comment ça va ?' 
