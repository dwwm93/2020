<?php




include('header.php');

$page = @$_GET["page"];
switch ($page) {

    case 'c':
        include('contact.php');
        break;

    case 'a':
        include('aPropos.php');
        break;

    case 'm':
        include('mention.php');
        break;

    
    default:
        include('accueil.php');
}

include('footer.php');
?>


