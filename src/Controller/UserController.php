<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\User;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class UserController extends AbstractController {

    /**
     * @Route("/user")
     *
     * @return void
     */
    function createUserForm() {

        $user = new User();
        $form = $this->createFormBuilder($user)
            ->add('name', TextType::class)
            ->add('email', EmailType::class)
            ->add('date', DateType::class)
            ->add('save', SubmitType::class)
            ->getForm();

        return $this->render('form.html.twig', ['userForm' => $form->createView()]);
    }
}