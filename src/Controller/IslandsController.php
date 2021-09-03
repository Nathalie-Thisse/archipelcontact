<?php

namespace App\Controller;

use App\Entity\Tours;
use App\Repository\ToursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IslandsController extends AbstractController
{
  
    #[Route('/iles', name: 'islands', methods: ['GET'])]
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

    #[Route('/lombok', name: 'lombok')]
    public function lombok(ToursRepository $toursRepository): Response
    {
        return $this->render('islands/lombok.html.twig', [
            'controller_name' => 'IslandsController',                        
            'tours' => $toursRepository->findAll(),
        ]);
    }

    #[Route('/sulawesi', name: 'sulawesi')]
    public function sulawesi(ToursRepository $toursRepository): Response
    {
        return $this->render('islands/sulawesi.html.twig', [
            'controller_name' => 'IslandsController',                        
            'tours' => $toursRepository->findAll(),
        ]);
    }

    #[Route('/flores', name: 'flores')]
    public function flores(ToursRepository $toursRepository): Response
    {
        return $this->render('islands/flores.html.twig', [
            'controller_name' => 'IslandsController',                        
            'tours' => $toursRepository->findAll(),
        ]);
    }

    #[Route('/sumba', name: 'sumba')]
    public function sumba(ToursRepository $toursRepository): Response
    {
        return $this->render('islands/sumba.html.twig', [
            'controller_name' => 'IslandsController',                        
            'tours' => $toursRepository->findAll(),
        ]);
    }

    #[Route('/sumatra', name: 'sumatra')]
    public function sumatra(ToursRepository $toursRepository): Response
    {
        return $this->render('islands/sumatra.html.twig', [
            'controller_name' => 'IslandsController',                        
            'tours' => $toursRepository->findAll(),
        ]);
    }

    #[Route('/kalimantan', name: 'kalimantan')]
    public function kalimantan(ToursRepository $toursRepository): Response
    {
        return $this->render('islands/kalimantan.html.twig', [
            'controller_name' => 'IslandsController',                        
            'tours' => $toursRepository->findAll(),
        ]);
    }



   
}
