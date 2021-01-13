

<?php
include('header.php');
$page=@$_GET["page"];
switch($page)
{
    case 'c' :
        include('contact.php');
    break;
    case 'p' :
        include('produits.php');
    break;
    case 's' :
        include('services.php');
    break;
    case 'profils' :
        include('profils.php');
    break;
    default:
    include('accueil.php');
}
include('footer.php');
/*
include('header.php');

$page = @$_GET["page"];
switch ($page) {

    case 'c':
        include('contact.php');
        break;

    case 'p':
        include('produits.php');
        break;

    case 's':
        include('services.php');
        break;

    case 'profils':
        include('profils.php');
        break;

    default:
        include('accueil.php');
}

include('footer.php');
*/
?>
