<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController {

    function hello() {

        return new Response('Hello Jean-Marc !');
    }
}