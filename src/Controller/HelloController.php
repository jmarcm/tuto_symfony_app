<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class HelloController extends AbstractController {

    /**
     * @Route("/hello/{param}", requirements={"param"="\d+"}, methods={"GET"})
     */
    function helloNumber($param) {

        return new Response("Hello number " . $param);

        // echo "<pre>";
        // var_dump($params);
        // echo "</pre>";
        
    }

    /**
     * @Route("/hello/{param}")
     */
    function helloDefault($param) {

        // $title = 'Utilisateurs';
        // $users = ['Aurélie', 'Léa', 'Pierrick', 'Pierre'];

        // return $this->render('hello.html.twig', ['title' => $title, 'users' => $users]);

        // $params = $request->query->all();
        // $string = 'Les paramètres sont : <br/>';
        // foreach ($params as $key => $value) {
        //     $string .= "- " . $key . ":" . $value . "<br/>";
        // }
        
        $param = $param ?? "vide";
        return new Response("Hello default " . $param);

        // echo "<pre>";
        // var_dump($params);
        // echo "</pre>";
        
    }
}