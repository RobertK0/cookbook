<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MyRecipes extends AbstractController {
  public function __construct() {}


  public function __invoke(): Response
  {
      return $this->render('my_recipes/index.html.twig',[]);
  }
}