<?php

namespace App\Service;

class Greeter {

    public $name;

    function __construct($name) {
        $this->name = $name;
    }

    function greet() {
        return "Hello $this->name !";
    }
}