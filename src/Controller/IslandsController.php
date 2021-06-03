<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IslandsController extends AbstractController
{
  
    #[Route('/islands', name: 'islands')]
    public function index(): Response
    {
        return $this->render('islands/index.html.twig', [
            'controller_name' => 'IslandsController',
        ]);
    }

    #[Route('/islands/bali', name: 'bali')]
    public function bali(): Response
    {
        return $this->render('islands/bali.html.twig', [
            'controller_name' => 'IslandsController',
        ]);
    }

   
}
