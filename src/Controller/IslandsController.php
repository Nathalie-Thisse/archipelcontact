<?php

namespace App\Controller;

use App\Entity\Tours;
use App\Repository\ToursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IslandsController extends AbstractController
{
  
    #[Route('/islands', name: 'islands', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('islands/index.html.twig', [
            'controller_name' => 'IslandsController',
        ]);
    }

    #[Route('/bali', name: 'bali')]
    public function bali(ToursRepository $toursRepository): Response
    {
        return $this->render('islands/bali.html.twig', [
            'controller_name' => 'IslandsController',                        
            'tours' => $toursRepository->findAll(),
        ]);
    }

    #[Route('/java', name: 'java')]
    public function java(ToursRepository $toursRepository): Response
    {
        return $this->render('islands/java.html.twig', [
            'controller_name' => 'IslandsController',                        
            'tours' => $toursRepository->findAll(),
        ]);
    }

   
}
