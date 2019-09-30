<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SimpleController extends AbstractController {

  /**
   * @Route("/")
   */
  public function firstRoute() {
    return new Response('test');
  }
}