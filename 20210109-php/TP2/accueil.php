<?php require_once "connexion.php"; ?>
<h1>Accueil</h1>

<h2>Utilisateurs</h2>
<pre>
    <?php
        $query_users = $dbh->query("SELECT * FROM utilisateur");
        print_r($query_users);
        $users = $query_users->fetchAll(PDO::FETCH_ASSOC);
        print_r($users);
        /**
        
$users = [
  0 => [ 
   "nom" => "toto" ... ],
  1 => [ 
   "nom" => "tata" ... ],
] 

$users = [ [ "nom" => "toto" ... ] , ["nom" => "tata" ... ] ] 

 
# $users[0]  ------>>> [ "nom" => "toto" , ...]
# $users[0]["nom"] -------->>> "toto"

# array_keys($users[0]);  ------>>>>> ["nom", "prenom" ...]  ( aka version écrite différemment : [ 0 => "nom", 1 => "prenom" ...]  )
# array_keys($users);  ------>>>>> [0, 1, 2]  ( aka version ecrite différemment : [0 => 0, 1 => 1, ... ]   .. )
           
        */
    ?>
</pre>

<table>
  <thead>
    <tr>
      <th>id</th>
      <th>nom</th>
      <th>prenom</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      foreach ($users as $user){
        echo "<tr><td>" . $user["id"] . "</td><td>" . $user["nom"] . "</td><td>" . $user["prenom"] . "</td></tr>"; 
      }
    ?>
  </tbody>
</table>

<!-- que du HTML avec des petits bouts de php --> 

<h2>Articles</h2>

<?php 
  print_tableau_html("SELECT id, contenu, date FROM article");
?>


<?php 

function print_tableau_html($sql){

    echo "<pre>"
    $query_items = $dbh->query(sql);
    print_r($query_items);
    $items = $query_items->fetchAll(PDO::FETCH_ASSOC);
    echo "</pre>";

    //$colonnes = ["id", "nom", "contenu", "categorie"];
  
    $colonnes = array_keys($items[0]); // ! PLUS AVANCÉ , pas nécessaire, sf dans la fonction

    echo "<table><thead><tr>";
    foreach ($colonnes as $col){
      	  echo "<th>" . $col . "</th>";
      	}
    echo "</tr></thead><tbody>";
    
    foreach ($items as $item){
        echo "<tr>";
        foreach ($colonnes as $col){
          echo "<td>" . $item[$col] . "</td>";
        }
        echo "</tr>";
      }
    
    echo "</tbody></table>";
}
?>

<!--
---------------------------------
accueil.php nouveau fichier ci dessous 


<?php

   require "connexion.php";
   
   $var1 = ""; # etc
   
   echo "<h1>Accueil</h1>";
   echo "<h2>Utilisateurs</h2>$var1";
   
   # que du php ici ! qui fait des echo de html
   
?>
-->
