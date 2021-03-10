<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerAdminController extends AbstractController
{
    /**
     * @Route("/controller/admin", name="controller_admin")
     */
    public function index(): Response
    {
        return $this->render('controller_admin/index.html.twig', [
            'controller_name' => 'ControllerAdminController',
        ]);
    }
}
