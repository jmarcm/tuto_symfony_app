<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends AbstractController {

    function hello() {

        $title = 'Utilisateurs';
        $users = ['Aurélie', 'Léa', 'Pierrick', 'Pierre'];

        return $this->render('hello.html.twig', ['title' => $title, 'users' => $users]);
        
    }
}