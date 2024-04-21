<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Repository\AnimalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    /**
     * @Route("/animal", name="app_animal")
     */
    public function index(): Response
    {
        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
        ]);
    }
    /**
     * @Route("/animals", name="animal_index", methods={"GET"})
     */
    public function show(AnimalRepository $animalRepository): Response
    {
        $animals = $animalRepository->findAll();
        return $this->json($animals);
    }
}