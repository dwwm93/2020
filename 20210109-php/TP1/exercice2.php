<?php
include("array.php");

foreach($eleves as $eleve)
{
    echo $eleve["nom"];
    echo $eleve["prenom"]. "<br>";
}