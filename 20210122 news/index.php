<?php

include('bdd.php');

include('functions.php');
include('model/article.php');

include('header.php');


$page = @$_GET["page"]; // décomposition de l'url : localhost/index.php?page=MAPAGE

switch ($page) {
    case 'cat':
        include('categories.php');
        break;
    case 'art':
        include('vue/read_article_blog.php');
        break;
    case 'create_art':
        include('vue/create_article.php'); // localhost/index.php?page=create_art
        break;
    case 'inscription':
        include('inscription.php');
        break;

    default:
        include("accueil.php");
}


include('footer.php');
