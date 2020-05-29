<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TpController extends AbstractController
{
    /**
     * @Route("/tp", name="tp")
     */
    public function index()
    {
        return $this->render('tp/index.html.twig', [
            'controller_name' => 'TpController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('tp/home.html.twig');
    }

    /**
     * @Route("/tp/12", name="tp_show")
     */
    public function show()
    {
        return $this->render('tp/tp_show.html.twig');
    }
}
