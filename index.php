<?php
require('vendor/autoload.php');
use App\Hello;
use App\BirthdayHelloDecorator;
use App\CaVaHelloDecorator;

$hello = new Hello(); 

$hello = new BirthdayHelloDecorator($hello); 
echo $hello->sayHello('Marc'); // Bonjour Marc. Joyeux anniversaire !'

$hello = new CaVaHelloDecorator($hello); 
echo $hello->sayHello('Marc'); // Bonjour Marc. Joyeux anniversaire ! Comment ça va ?' 
