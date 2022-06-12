<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Doctrine\Persistence\ManagerRegistry;


use App\Entity\User;
use App\Form\UserType;

class UserController extends AbstractController {

    /**
     * @Route("/user")
     *
     * @return void
     */
    function createUserForm(ManagerRegistry $doctrine, Request $request) {

        $user = new User();
        $form = $this->createForm(UserType::class, $user);
            

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Récupère doctrine via la classe AbstractController
            $entityManager = $doctrine->getManager();

            $user_infos = $form->getData();

            echo "<pre>";
            var_dump($user_infos);
            echo "</pre>";

            $entityManager->persist($user_infos);
            $entityManager->flush();

            return new Response("Le formulaire est validé");
        }

        return $this->render('form.html.twig', ['userForm' => $form->createView()]);
    }
}