<?php 
Namespace App;

class CaVaHelloDecorator implements HelloInterface{

    private $hello;

    public function __construct(HelloInterface $hello)
    {
        $this->hello = $hello;
    }

    public function sayHello ($name) {
        return $this->hello->sayHello($name) . ' Comment ça va ?';
    }

}
