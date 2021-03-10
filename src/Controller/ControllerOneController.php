<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerOneController extends AbstractController
{
    /**
     * @Route("/", name="controller_one")
     */
    public function index(): Response
    {
        return $this->render('controller_one/index.html.twig', [
            'controller_name' => 'ControllerOneController',
        ]);
    }
}
