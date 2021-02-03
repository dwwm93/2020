<?php

class CategorieController
{
    private $bdd;

    public function __construct(PDO $bdd)
    {
        $this->bdd = $bdd;
    }

    /**
     * Fonction du controller qui gère la mise à jour de la catégorie donnée dans $_GET["id"]
     * 
     * @param int $id Identifiant de la catégorie à mettre à jour.
     */
    function update($id)
    {
        /**
         * Début du traitement du controller.
         * 
         * 1. Appel au modèle pour récupérer la catégorie
         */
        $categorie = new Categorie($this->bdd, $id);

        $isUpdated = false;

        /**
         * 2. Traitement du formulaire ("intelligence")
         */
        if (array_key_exists("submit", $_POST)) {
            /**
             * 3. Appel au modèle de nouveau pour sauvegarder les données
             */
            $categorie->nom = @$_POST["nom"];
            $categorie->update();

            /**
             * 4. On prépare la génération de la view
             */
            $isUpdated = true;
        }

        /**
         * 5. Appel de la vue pour affichage
         */
        include('view/categorie/updateCategorie.php');
    }

    /**
     * Fonction du controller qui gère la création d'une nouvelle catégorie.
     */
    function create()
    {
        /** 
         * 1. Instanciation d'une nouvelle Categorie // Appel MODEL
         */
        $categorie = new Categorie($this->bdd);

        /**
         * 2. Traitement : donne son "nom" à la catégorie. // CONTROLLER
         */
        $categorie->nom = @$_POST["nom"];

        /**
         * 3. Insertion des données dans la base. // Appel MODEL
         */
        $categorie->insert();

        include('view/categorie/createCategorie.php');
    }
}
