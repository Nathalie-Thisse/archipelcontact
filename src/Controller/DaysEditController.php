<?php

namespace App\Controller;

use App\Entity\Days;
use App\Form\DaysType;
use App\Repository\DaysRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/days/edit')]
class DaysEditController extends AbstractController
{
    #[Route('/', name: 'days_edit_index', methods: ['GET'])]
    public function index(DaysRepository $daysRepository): Response
    {
        return $this->render('days_edit/index.html.twig', [
            'days' => $daysRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'days_edit_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $day = new Days();
        $form = $this->createForm(DaysType::class, $day);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($day);
            $entityManager->flush();

            return $this->redirectToRoute('days_edit_index');
        }

        return $this->render('days_edit/new.html.twig', [
            'day' => $day,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'days_edit_show', methods: ['GET'])]
    public function show(Days $day): Response
    {
        return $this->render('days_edit/show.html.twig', [
            'day' => $day,
        ]);
    }

    #[Route('/{id}/edit', name: 'days_edit_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Days $day): Response
    {
        $form = $this->createForm(DaysType::class, $day);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('days_edit_index');
        }

        return $this->render('days_edit/edit.html.twig', [
            'day' => $day,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'days_edit_delete', methods: ['POST'])]
    public function delete(Request $request, Days $day): Response
    {
        if ($this->isCsrfTokenValid('delete'.$day->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($day);
            $entityManager->flush();
        }

        return $this->redirectToRoute('days_edit_index');
    }
}
