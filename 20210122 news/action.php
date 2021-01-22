<?php

    include("index.php");  

    include("model/utilisateur.php");
    $user= new Utilisateur();
    $user->fetchUser();
    $user->ajoutUser($bdd);


//ajouteUser($bdd);
