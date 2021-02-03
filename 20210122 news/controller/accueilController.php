<?php

class AccueilController
{
    private $bdd;

    public function __construct(PDO $bdd)
    {
        $this->bdd = $bdd;
    }

    function affiche()
    {
        $article = new Article($this->bdd);
        $topArticles = $article->topArticles();

        include('view/article/top_articles.php');
    }
}
