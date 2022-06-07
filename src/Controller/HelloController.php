<?php
// recherche de debuggers : @category:debuggers PHP
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class HelloController extends AbstractController {

    /**
     * @Route({ "fr": "/bonjour", "en": "/hello" })
     */
    function hello(Request $request) {

        $locale = $request->getLocale();
        $salutation = ($locale == "fr") ? "Bonjour" : "Hello";
        return new Response("$salutation : $locale");
    }
}
