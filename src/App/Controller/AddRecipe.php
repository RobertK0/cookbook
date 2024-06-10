<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Form\RecipeType;
use App\Repository\RecipeRepository;
use App\Entity\Recipe;

class AddRecipe extends AbstractController {
  /**
   * @var RecipeRepository
   */
  private $recipeRepository;
    
  public function __construct(RecipeRepository $recipeRepository) {
    $this->recipeRepository = $recipeRepository;

  }

  public function __invoke(Request $request): Response
  {
      $form = $this->createForm(RecipeType::class, []);

      $form->handleRequest($request);
      

      if ($form->isSubmitted() && $form->isValid()) {
          $formData = $form->getData();

          $recipe = new Recipe();
          $recipe->setName($formData['name']);
          
          $this->recipeRepository->add($recipe, true);

      //     $this->addFlash(
      //         'success',
      //         'my_account.user_successfully_updated',
      //     );

          return $this->redirectToRoute('add_recipe');
      }

      return $this->render(
          'add_recipe/index.html.twig',
          [
              'form' => $form->createView(),
          ],
      );
  }
}