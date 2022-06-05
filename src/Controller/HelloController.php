<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class HelloController extends AbstractController {

    function hello(Request $request) {

        // $title = 'Utilisateurs';
        // $users = ['Aurélie', 'Léa', 'Pierrick', 'Pierre'];

        // return $this->render('hello.html.twig', ['title' => $title, 'users' => $users]);

        $params = $request->query->all();
        $string = 'Les paramètres sont : <br/>';
        foreach ($params as $key => $value) {
            $string .= "- " . $key . ":" . $value . "<br/>";
        }
        return new Response($string);
        // echo "<pre>";
        // var_dump($params);
        // echo "</pre>";
        
    }
}