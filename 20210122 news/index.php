<?php

include('bdd.php');

include('functions.php');
include('model/article.php');
include("model/categorie.php");

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
    case 'update_art':
        include('vue/update_article.php');
        break;
    case 'delete_art':
        include('vue/delete_article.php');
        break;
    case 'create_cat':
        include('vue/categorie/createCategorie.php'); // localhost/index.php?page=create_cat
        break;
    case 'update_cat':
        include('vue/categorie/updateCategorie.php');
        break;
    case 'delete_cat':
        include('vue/categorie/deleteCategorie.php');
        break;
    case 'inscription':
        include('inscription.php');
        break;

    default:
        include("accueil.php");
}


include('footer.php');
