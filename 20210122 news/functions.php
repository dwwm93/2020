<?php



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
