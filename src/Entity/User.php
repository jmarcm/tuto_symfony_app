<?php

namespace App\Entity;

class User {

    protected $name;
    protected $email;

    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }
}