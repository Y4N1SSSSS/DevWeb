<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    #[Route('/hello', name: 'app_hello')]
    public function sayHello()
    {
        return new Response('Hello!');
    }

    #[Route('/bonjour/{nom}',name: 'app_bonjour')]
    public function bonjour($nom)
    {
        //return new Response("Bonjour $nom !");
        return $this->render('bonjour.html.twig', [
        'nom' => $nom,
        ]);
    }
}
