<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Homepage extends AbstractController {
  public function __construct() {}

  public function devHomepageAction(Request $request): Response
  {
      if ('dev' !== $this->getEnvironment()) {
          throw new \LogicException('Tried showing dev homepage on non-dev environment.');
      }

      return $this->render('homepage/dev.html.twig', []);
  }

  private function getEnvironment(): string
  {
      return $this->getParameter('kernel.environment');
  }
}