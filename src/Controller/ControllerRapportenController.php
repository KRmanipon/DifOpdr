<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerRapportenController extends AbstractController
{
    /**
     * @Route("/controller/rapporten", name="controller_rapporten")
     */
    public function index(): Response
    {
        return $this->render('controller_rapporten/index.html.twig', [
            'controller_name' => 'ControllerRapportenController',
        ]);
    }
}
