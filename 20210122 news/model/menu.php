<?php

class Menu
{
    public $siteBrand;
    public $bgBootstrapClass;
    public $categories;

    public function __construct(PDO $bdd, $site, $limit = null, $bgClass = "bg-light")
    {
        $this->siteBrand = $site;
        $this->bgBootstrapClass = $bgClass;
        $this->remplirCategories($bdd, $limit);
    }

    /**
     * Menu + Categorie
     */
    function affiche()
    {
        echo '<nav class="navbar navbar-expand-sm ' . $this->bgBootstrapClass . '" id="navbar">
            <a class="navbar-brand" href="index.php?page=">' . $this->siteBrand . '</a>
            <ul class="navbar-nav">
                <li class="nav-item" ><a class="nav-link" href="index.php?page=inscription">Inscription</a>
                </li>';

        foreach ($this->categories as $categorie) {
            echo "<li class='nav-item'>" .
                ' <a class="nav-link" href="index.php?page=cat&id=' . $categorie["id"] . '">' . $categorie["nom"] . '</a></li>';
        };
        echo '</ul></nav>';
    }

    /**
     * Menu + Categorie dans le footer
     */
    function afficheFooter()
    {
        echo '<ul class="">
                <li class="nav-item" >
                    <a class="nav-link" href="index.php?page=inscription">Inscription</a>
                </li>';

        foreach ($this->categories as $categorie) {
            echo "<li class=''>" .
                ' <a class="" href="index.php?page=cat&id=' . $categorie["id"] . '">' . $categorie["nom"] . '</a></li>';
        };
        echo '</ul>';
    }

    function remplirCategories(PDO $bdd, int $limit)
    {
        if ($limit === null) {
            $cat = $bdd->query('SELECT * FROM categories');
        } else {
            $cat = $bdd->prepare('SELECT * FROM categories LIMIT :limit');
            $cat->execute(["':limit" => $limit]);
        }
        $this->categories = $cat->fetchAll();
    }
}
