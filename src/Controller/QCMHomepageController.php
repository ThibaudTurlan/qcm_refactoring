<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QCMHomepageController extends AbstractController
{
    /**
     * @Route("/q/c/m/homepage", name="q_c_m_homepage")
     */
    public function index(): Response
    {
        return $this->render('qcm_homepage/index.html.twig', [
            'controller_name' => 'QCMHomepageController',
        ]);
    }
}
