<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConstructionController extends AbstractController
{
    #[Route('/under-construction', name: 'construction')]
    public function index(): Response
    {
        return $this->render('construction/index.html.twig', [
            'controller_name' => 'ConstructionController',
        ]);
    }
}
