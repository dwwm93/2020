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

    function remplirCategories(PDO $bdd, ?int $limit)
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
