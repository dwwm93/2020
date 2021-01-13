<?php

$donnees = [
    ["nom" => "Zer", "prenom" => "Free"],
    ["nom" => "De Niro", "prenom" => "Robert"],
    ["nom" => "Downey Jr.", "prenom" => "Robert"],
    ["nom" => "Chu", "prenom" => "Pika"],
    ["nom" => "Daniels", "prenom" => "Jack"],
];

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

$colonnes = ["nom", "prenom"];

/**
 * Cette fonction affiche à l'écran (dans le terminal) un tableau avec le nom des élèves en majuscule
 * et le prenom des élèves en minuscule, dans 2 colonnes différentes. (cf fonction genTableauEleves)
 * 
 * @param array $eleves Tableau des élèves, chaque élève étant un tableau associatif ["nom" => ... , "prenom" => ... ]
 * @param array $colonnes Tableau des noms des colonnes à afficher dans cet ordre
 */
function afficheTableauEleves(array $eleves, array $colonnes)
{
    // TODO
    afficheDansTerminal(
        genTableauEleves($eleves, $colonnes)
    );
}

/**
 * Renvoie un tableau "graphique", sous forme de chaine de texte, qui contient la liste des élèves
 * sur 2 colonnes, la première c'est le nom en majuscule, la deuxième c'est le prénom en minuscule.
 * 
 * @param array $eleves Tableau des élèves, chaque élève étant un tableau associatif ["nom" => ... , "prenom" => ... ]
 * @param array $colonnes Tableau des noms des colonnes à afficher dans cet ordre
 * @return string Renvoie le tableau sous forme de variable "string" php.
 */
function genTableauEleves(array $eleves, array $colonnes)
{
    $tbl = ajouteSautDeLigne(genCol(majuscule($colonnes[0])) . genCol(minuscule($colonnes[1])));
    $tbl .= ajouteSautDeLigne(genLigne(30)); // TODO compter le plus grand nombre NOM + PRENOM

    foreach ($eleves as $eleve) {
        $tbl .= ajouteSautDeLigne(genCol(majuscule($eleve[$colonnes[0]])) . genCol(minuscule($eleve[$colonnes[1]])));
    }
    return $tbl;
}

afficheTableauEleves($donnees, $colonnes);
