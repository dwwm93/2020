<?php

namespace App\Controller;

use App\Entity\Profil;
use App\Repository\ProfilRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    /**
     * "READ" la collection => la liste de tous les profils
     * 
     * @Route("/profil", name="profil")
     */
    public function index(): Response
    {
        /** @var ProfilRepository $repo */
        $repo = $this->getDoctrine()->getRepository(Profil::class);
        $profils = $repo->findAll();

        return $this->render('profil/index.html.twig', [
            'controller_name' => 'ProfilController',
            'profils' => $profils,
        ]);
    }

    /**
     * "READ" un item => un profil en particulier
     * @Route("/profil/{id}", name="profil_show")
     */
    public function show($id)
    {
        /** @var ProfilRepository $repo */
        $repo = $this->getDoctrine()->getRepository(Profil::class);
        $profil = $repo->find($id);

        return $this->render("profil/show.html.twig", [
            'p' => $profil,
        ]);
    }
}
