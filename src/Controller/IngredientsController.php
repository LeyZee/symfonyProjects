<?php

namespace App\Controller;

use App\Entity\Ingredient;
use App\Form\IngredientType;
use App\Repository\IngredientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IngredientsController extends AbstractController
{
    #[Route('/', name: 'app_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }
    #[Route('/ingredients', name: 'app_ingredients', methods: ['GET'])]
    public function readIndex(IngredientRepository $repo): Response
    {
        $ingredients = $repo->findAll();
        return $this->render('ingredients/index.html.twig', [
            'ingredients' => $ingredients
        ]);
    }


}
