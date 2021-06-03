<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ToursController extends AbstractController
{
    /**
     * @Route("/tours", name="tours")
     */
    public function index(): Response
    {
        return $this->render('tours/index.html.twig', [
            'controller_name' => 'ToursController',
        ]);
    }
}
