<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\NewsRepository;

class InformationController extends AbstractController
{
    /**
     * @Route("/information", name="information")
     */
    public function index(NewsRepository $newsRepository): Response
    {
        return $this->render('information/index.html.twig', [
            'news' => $newsRepository->findAll(),
        ]);
    }
}
