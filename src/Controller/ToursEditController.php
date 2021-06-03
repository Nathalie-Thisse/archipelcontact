<?php

namespace App\Controller;

use App\Entity\Tours;
use App\Form\ToursType;
use App\Repository\ToursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/tours/edit')]
class ToursEditController extends AbstractController
{
    #[Route('/', name: 'tours_edit_index', methods: ['GET'])]
    public function index(ToursRepository $toursRepository): Response
    {
        return $this->render('tours_edit/index.html.twig', [
            'tours' => $toursRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'tours_edit_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $tour = new Tours();
        $form = $this->createForm(ToursType::class, $tour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tour);
            $entityManager->flush();

            return $this->redirectToRoute('tours_edit_index');
        }

        return $this->render('tours_edit/new.html.twig', [
            'tour' => $tour,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'tours_edit_show', methods: ['GET'])]
    public function show(Tours $tour): Response
    {
        return $this->render('tours_edit/show.html.twig', [
            'tour' => $tour,
        ]);
    }

    #[Route('/{id}/edit', name: 'tours_edit_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Tours $tour): Response
    {
        $form = $this->createForm(ToursType::class, $tour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tours_edit_index');
        }

        return $this->render('tours_edit/edit.html.twig', [
            'tour' => $tour,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'tours_edit_delete', methods: ['POST'])]
    public function delete(Request $request, Tours $tour): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tour->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tour);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tours_edit_index');
    }
}
