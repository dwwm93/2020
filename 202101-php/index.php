<?php
  // Affichons quelque chose !
  echo "mon premier code *\o/* o//* *\\\\o \n";

  // Maintenant on crée une variable, avec "$"
  $nom = "El Professor";

  // Et créons carrément une fonction, on est des oufs :
  function bonjour($qui){
    return "Bonjour " . $qui . "\n";
  }

  // Et pourquoi pas une autre qui dit l'inverse :
  function bonsoir($qui){
    return "Bonsoir " . $qui . "\n";
  }

  // On affiche le résultat de l'appel à la fonction :
  echo bonjour($nom);

  echo "##############################################################################\n";
  echo "# LES TABLEAUX !!! O_O\n";
  echo "##############################################################################\n";

  /**
   * Maintenant on va voir les tableaux (aka listes)
   * (aka = also known as), et comment les parcourir.
   */
  $tableau = ["Abdel", "Habib", "Yorguen"];

  echo "_.~\"~._.~\"~._ 1ère méthode  _.~\"~._.~\"~._\n";

  // Première possibilité, la plus ancienne :
  for ($i = 0; $i < 3; $i++){
    // Dans $i on a successivement 0, 1 et 2, donc on
    // peut récupérer les index correspondants du tableau
    // et les afficher :
    echo bonjour($tableau[$i]);
  }

  echo "_.~\"~._.~\"~._ 2ème méthode  _.~\"~._.~\"~._\n";

  // On peut parcourir aussi élément par élément :
  foreach ($tableau as $eleve){
    // sans avoir recours à l'index !
    echo bonjour($eleve);
  }

  echo "##############################################################################\n";
  echo "# On s'attaque aux conditions !!\n";
  echo "##############################################################################\n";

  /**
   * Fonction qui renvoie une salutation à la personne donnée en fonction du moment
   * de la journée.
   * 
   * @param string $nom Nom de la personne à saluer
   * @param boolean $jour True si le jour est levé
   * @return string Renvoie la salutation
   */
  function saluer($nom, $jour){
    if ($jour === true){
      return bonjour($nom);
    }
    else {
      return bonsoir($nom);
    }
  }

  /**
   * Affiche la salutation à l'écran
   *
   * @param string $nom Nom de la personne à saluer
   * @param boolean $jour True si le jour est levé
   * @return void Pas de return !
   */
  function afficherSalutation($nom, $jour){
    echo saluer($nom, $jour);
  }

  /**
   * Fonction qui permet de déclencher une action pour chaque élève.
   * 
   * @param array $eleves Tableau des élèves
   * @param function $action Fonction qui représente l'action à effectuer
   */
  function actionSurEleves($eleves, $action){
      foreach ($eleves as $eleve){
        $action($eleve, false);
      }
  }

  echo "                              _             _          _ _              __                 _   _                \n"; 
  echo '     /\                      | |           | |        | | |            / _|               | | (_)               '."\n"; 
  echo '    /  \__   _____  ___    __| | ___  ___  | |__   ___| | | ___  ___  | |_ ___  _ __   ___| |_ _  ___  _ __  ___'."\n"; 
  echo '   / /\ \ \ / / _ \/ __|  / _` |/ _ \/ __| | \'_ \ / _ \ | |/ _ \/ __| |  _/ _ \| \'_ \ / __| __| |/ _ \| \'_ \/ __|'."\n";
  echo '  / ____ \ V /  __/ (__  | (_| |  __/\__ \ | |_) |  __/ | |  __/\__ \ | || (_) | | | | (__| |_| | (_) | | | \__ \ '."\n";
  echo ' /_/    \_\_/ \___|\___|  \__,_|\___||___/ |_.__/ \___|_|_|\___||___/ |_| \___/|_| |_|\___|\__|_|\___/|_| |_|___/'."\n";

  actionSurEleves($tableau, function($a, $b){afficherSalutation($a,$b);});
