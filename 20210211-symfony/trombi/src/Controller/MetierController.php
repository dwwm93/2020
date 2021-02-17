<?php

namespace App\Controller;

use App\Entity\Metier;
use App\Repository\MetierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MetierController extends AbstractController
{
    /**
     * @Route("/metier", name="metier")
     */
    public function index(MetierRepository $repo): Response
    {
        $metiers = $repo->findAll();

        return $this->render('metier/index.html.twig', [
            'metiers' => $metiers,
        ]);
    }

    /**
     * @Route("/metier/{id}", name="metier_show")
     */
    public function show(Metier $metier)
    {
        return $this->render('metier/show.html.twig', [
            'metier' => $metier
        ]);
    }
}
