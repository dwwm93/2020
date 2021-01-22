<?php

/**
 * Menu + Categorie
 */
function menu($bdd)
{
    $cat = $bdd->query('SELECT * FROM categories');
    while ($colonne = $cat->fetch()) {
        echo "<li class='nav-item'>" .
            ' <a class="nav-link" href="index.php?page=cat&id=' . $colonne["id_cat"] . '">' . $colonne["nom_cat"] . '</a></li>';
    };
};

/**
 * Utilisateur + affichage "alerte" réussite / échec
 */
function ajouteUser($bdd)
{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $mdp = $_POST["mdp"];

    $sql = $bdd->prepare("INSERT INTO utilisateur (nom,prenom,email,tel,mdp) VALUES (?,?,?,?,?)");

    if ($sql->execute(["$nom", "$prenom", "$email", "$tel", "$mdp"])) {
        echo "<div class='text-center alert alert-success'>Inscription réussie </div>";
    } else {
        echo "<div class='text-center alert alert-danger'>Inscription Interrompu </div>";
    }
    //   $bdd->query('INSERT INTO utilisateur(nom,prenom,email,tel,mdp) VALUES ("'.$nom.'","'.$prenom.'","'.$email.'","'.$tel.'","'.$mdp.'")');

};
