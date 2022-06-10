<?php
// recherche de debuggers : @category:debuggers PHP
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Psr\Log\LoggerInterface ;


class HelloController extends AbstractController {

    /**
     * @Route({ "fr": "/bonjour", "en": "/hello" })
     */
    function hello(LoggerInterface $logger) {

        $logger->alert("logger !");
        return new Response(hello.html.twig);
    }
}
