<?php

include('bdd.php');

include('functions.php');

include('header.php');


$page = @$_GET["page"];

switch ($page) {
    case 'cat':
        include('categories.php');
        break;
    case 'art':
        include('article.php');
        break;
    case 'inscription':
        include('inscription.php');
        break;

    default:
        include("accueil.php");
}


include('footer.php');
