<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\RecipeRepository;

class MyRecipes extends AbstractController {
  /**
   * @var RecipeRepository
   */
  private $recipeRepository;
    
  public function __construct(RecipeRepository $recipeRepository) {
    $this->recipeRepository = $recipeRepository;

  }

  public function __invoke(): Response
  {
    $recipes = $this->recipeRepository->getAllRecipes();
  
    return $this->render('my_recipes/index.html.twig', [
      'recipes' => $recipes,
    ]);
  }
}