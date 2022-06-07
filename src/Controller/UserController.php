<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\User;

class UserController extends AbstractController {

    /**
     * @Route("/user")
     *
     * @return void
     */
    function createUserForm() {

        $user = new User();
        $form = $this->createFormBuilder($user)
            ->add("name")
            ->add("email")
            ->getForm();

        return $this->render('form.html.twig', ['userForm' => $form->createView()]);
    }
}