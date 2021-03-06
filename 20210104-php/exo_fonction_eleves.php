<?php

$donnees = [
    ["nom" => "Zer", "prenom" => "Free"],
    ["nom" => "De Niro", "prenom" => "Robert"],
    ["nom" => "Downey Jr.", "prenom" => "Robert"],
    ["nom" => "Chu", "prenom" => "Pika"],
    ["nom" => "Daniels", "prenom" => "Jack"],
];

$colonnes = ["nom", "prenom"];

function minuscule(string $mot)
{
    return strtolower($mot);
}

function majuscule(string $mot)
{
    return strtoupper($mot);
}

function genCol(string $col)
{
    return $col . '|';
}

function genLigne(int $nbLettres)
{
    return str_repeat("=", $nbLettres);
}

function ajouteSautDeLigne(string $ligne)
{
    return "$ligne\n";
}

function afficheDansTerminal(string $chaine)
{
    echo $chaine;
}

/**
 * Cette fonction affiche à l'écran (dans le terminal) un tableau avec le nom des élèves en majuscule
 * et le prenom des élèves en minuscule, dans 2 colonnes différentes. (cf fonction genTableauEleves)
 * 
 * @param array $eleves Tableau des élèves, chaque élève étant un tableau associatif ["nom" => ... , "prenom" => ... ]
 * @param array $colonnes Tableau des noms des colonnes à afficher dans cet ordre
 */
function afficheTableauEleves($eleves, $colonnes)
{
    // TODO
    $tmp = genTableauEleves($eleves, $colonnes);
    // TODO
}

/**
 * Renvoie un tableau "graphique", sous forme de chaine de texte, qui contient la liste des élèves
 * sur 2 colonnes, la première c'est le nom en majuscule, la deuxième c'est le prénom en minuscule.
 * 
 * @param array $eleves Tableau des élèves, chaque élève étant un tableau associatif ["nom" => ... , "prenom" => ... ]
 * @param array $colonnes Tableau des noms des colonnes à afficher dans cet ordre
 * @return string Renvoie le tableau sous forme de variable "string" php.
 */
function genTableauEleves($eleves, $colonnes)
{
    // TODO 
    /**
     * identique à 
for ($i=0;$i<=4;$i++){
    $eleve = $eleves[$i];
    // TODO
}
     */
    foreach ($eleves as $eleve) {
        // TODO 
    }
    // TODO
}

afficheTableauEleves($donnees, $colonnes);
// POUR EXECUTER LE SCRIPT :
// php nom_du_fichier.php
