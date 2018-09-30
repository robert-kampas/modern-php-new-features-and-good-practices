<?php

class Base {
    public function sayHello() {
        echo 'Hello world!';
    }
}

trait SayWorld {
    public function sayHello() {
        echo 'World universe!';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello(); // Hello universe!