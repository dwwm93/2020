<?php

include("bdd.php");

include("model/article.php");
include("model/categorie.php");
include("model/menu.php");

include("controller/categorieController.php");
include("controller/accueilController.php");
include("controller/menuController.php");

include("view/templates.php");
include("view/header.php");

class Router
{
    private $page;

    public function __construct($page = null)
    {
        $this->page = $page;
    }

    /**
     * Déclenche l'appel au controller adéquat en fonction de la page demandée par l'utilisateur.
     * 
     * @param PDO $bdd Objet de connexion à la BDD.
     */
    function getPage(PDO $bdd)
    {
        switch ($this->page) {
            case 'create_cat':
                $controller = new CategorieController($bdd);
                $controller->create();
                break;
            case 'update_cat':
                $controller = new CategorieController($bdd);
                $controller->update($_GET["id"]);
                break;

            default:
                $controller = new AccueilController($bdd);
                $controller->affiche();
                break;
        }
    }
}

$router = new Router(@$_GET["page"]); // On récupère la valeur associée à la clé "page" dans l'url
// exemple localhost/index.php?page=create_cat 

$router->getPage($bdd);

include("view/footer.php");
