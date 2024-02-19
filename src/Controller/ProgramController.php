<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProgramController extends AbstractController
{
    #[Route('/program', name: 'app_program')]
    public function index(): Response
    {
        return $this->render('program/index.html.twig', [
            'controller_name' => 'ProgramController',
            'website' => 'Programm',
        ]);
    }

    #[Route('/program/{id<\d+>}', name: 'program_show')]
    public function show(int $id): Response
    {
        return $this->render('program/show.html.twig', [
            'program_id' => $id,
        ]);
    }
}
