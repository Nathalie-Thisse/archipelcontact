<?php

namespace App\Controller;

use App\Entity\Tours;
use App\Entity\Days;
use App\Repository\ToursRepository;
use App\Repository\DaysRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ToursController extends AbstractController
{

    // Display all tours in Tours Page: 

    #[Route('/circuits', name: 'tours', methods: ['GET'])]
    public function index(ToursRepository $toursRepository): Response
    {
        return $this->render('tours/index.html.twig', [
            'tours' => $toursRepository->findAll(),
        ]);
    } 

     // 2d method: 
     ///**
     // * @Route("/tours", name="tours")
     // */
     /* public function index(EntityManagerInterface $entityManager): Response
     {
         $tours = $entityManager->getRepository(Tours::class)->findAll();

         return $this->render('tours/index.html.twig', [
             'tours' => $tours,
         ]);
     }
     */
    
    // Display each tour information in Tour Page: 
        
    #[Route('/circuit/{id}', name: 'show_tour', methods: ['GET'])]
    public function showTour($id, EntityManagerInterface $entityManager, Request $request): Response
    {
        $tour = $entityManager->getRepository(Tours::class)->find($id);
        return $this->render('tours\tour.html.twig', [
            'tour' => $tour,                        
            // 'days' => $tour->getDays(),
        ]);
    }

}
