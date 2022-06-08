<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


use App\Entity\User;
use App\Form\UserType;

class UserController extends AbstractController {

    /**
     * @Route("/user")
     *
     * @return void
     */
    function createUserForm(Request $request) {

        $user = new User();
        $form = $this->createForm(UserType::class, $user);
            

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            return new Response("Le formulaire est validé");
        }

        return $this->render('form.html.twig', ['userForm' => $form->createView()]);
    }
}