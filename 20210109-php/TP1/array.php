<?php


/*$eleves=array("nom"=>"kim", "prenom"=>"rakthak");

echo $eleves["nom"];
echo "<br>";


$eleves=array("kim","rakthak");
echo $eleves[0];*/

$eleves=[["nom"=>"A","prenom"=>"a",5=>"paris"],
["nom"=>"B","prenom"=>"b",5=>"paris"],
["nom"=>"C","prenom"=>"c",5=>"paris"],
["nom"=>"D","prenom"=>"d",5=>"paris"]
];


    for($i=0; $i< count($eleves); $i++){
        echo $eleves[$i]["nom"]." ". $eleves[$i]["prenom"] ."<br>";
}
