<?php
Namespace App;

class Hello implements HelloInterface
{

    public function sayHello ($name) {
        return 'Bonjour ' . $name . '.'; 
    }

}
