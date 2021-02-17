<?php

namespace App\Controller;

use App\Entity\Profil;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Profil::class);
        $derniersProfils = $repo->findBy([], ['id' => 'DESC'], 3);

        return $this->render('accueil/index.html.twig', [
            'profils' => $derniersProfils,
        ]);
    }
}
