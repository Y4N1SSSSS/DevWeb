<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    #[Route('/hello', name: 'app_hello')]
    public function sayHello(): Response
    {
        return $this->render('hello.html.twig');
    }

    #[Route('/bonjour/{nom?}', name: 'app_bonjour')]
    public function bonjour($nom = null)
    {
        return $this->render('bonjour.html.twig', [
            'nom' => $nom,
        ]);
    }
}
