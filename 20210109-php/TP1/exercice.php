<?php

/**
 * function qui va avoir une boucle et des que j' arrive au numero 10 m' affiche un message ,
 * je continue sur la boucle, quand j'arrive au 15 j'affiche un message "vous etes arrivée au 15"
 * 
 */

 /**$num = 15;
 
function afficheMessage(){
 
    for($i=0; $i<=$num; $i++){
        if($i==10){
            echo "vous etes à 10";
        
        }else($i==15){
            echo "vous etes à 15";
        }
     }
}
afficheMessage();*/

function affiche()
{
      $num = 20;
      for ($i = 1; $i <= $num; $i++) {
            if ($i === 10) {
                  echo "this is 10";
                  echo "<br>";
            } else if ($i === 15) {
                  echo "this is 15";
                  echo "<br>";
            } else {
                  echo $i;
                  echo "<br>";
            }
      }
}
affiche();



echo "
<b>".affiche()."</b>
<script>
alert('hello');
</script>";