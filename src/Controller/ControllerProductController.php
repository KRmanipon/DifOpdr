<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerProductController extends AbstractController
{
    /**
     * @Route("/controller/product", name="controller_product")
     */
    public function index(): Response
    {
        return $this->render('controller_product/index.html.twig', [
            'controller_name' => 'ControllerProductController',
        ]);
    }
}
