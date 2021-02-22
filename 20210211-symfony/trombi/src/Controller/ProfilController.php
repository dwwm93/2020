<?php

namespace App\Controller;

use App\Entity\Profil;
use App\Form\Type\ProfilType;
use App\Repository\ProfilRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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

    /**
     * "CREATE" un nouvel item
     * 1er appel: "$_GET" affichage du formulaire
     * 2ème appel : "$_POST" => "manager"
     *
     * @Route("/profil/new", name="profil_create")
     */
    public function create(Request $request)
    {
        $profil = new Profil;
        /**
         * Form = c'est un formulaire "php"
         * FormBuilder = c'est un "constructeur" de Form "php"
         */
        $form = $this->createForm(ProfilType::class, $profil);

        /**
         * Récupère le "POST" de l'utilisateur dans le Form,
         * en meme temps, "Form" remplit l'entité $profil
         */
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($profil);
            // $profil->getId() == null
            $em->flush();

            return $this->redirectToRoute("profil_show", [
                "id" => $profil->getId()
            ]);
        }

        return $this->render('profil/new.html.twig', [
            "formulaire" => $form->createView(),
        ]);
    }

    /**
     * "UPDATE" un item existant
     * 1er appel: "$_GET" affichage du formulaire
     * 2ème appel : "$_POST" => "manager"
     *
     * ParamConverter va transformer tout seul l'id en Profil !!
     *
     * @Route("/profil/{id}/update", name="profil_update")
     */
    public function update(
        Profil $profil,
        Request $request,
        EntityManagerInterface $manager
    ) {
        /**
         * Form = c'est un formulaire "php"
         * FormBuilder = c'est un "constructeur" de Form "php"
         */
        $form = $this->createForm(ProfilType::class, $profil);

        /**
         * Récupère le "POST" de l'utilisateur dans le Form,
         * en meme temps, "Form" remplit l'entité $profil
         */
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->flush();

            return $this->redirectToRoute("profil_show", [
                "id" => $profil->getId()
            ]);
        }

        return $this->render('profil/update.html.twig', [
            "formulaire" => $form->createView(),
        ]);
    }

    /**
     * "DELETE" un item existant
     * 1er appel: "$_GET" affichage du formulaire
     * 2ème appel : "$_POST" => "manager"
     *
     * ParamConverter va transformer tout seul l'id en Profil !!
     *
     * @Route("/profil/{id}/delete", name="profil_delete")
     */
    public function delete(
        Profil $profil,
        Request $request,
        EntityManagerInterface $manager
    ) {
        $form = $this->createFormBuilder($profil)
            ->add("delete", SubmitType::class, ['attr' => [
                "class" => "btn btn-error"
            ]])
            ->getForm();

        /**
         * Récupère le "POST" de l'utilisateur dans le Form,
         * en meme temps, "Form" remplit l'entité $profil
         */
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->delete($profil);
            $manager->flush();

            return $this->redirectToRoute("profil");
        }

        return $this->render('profil/delete.html.twig', [
            "formulaire" => $form->createView(),
        ]);
    }
}
