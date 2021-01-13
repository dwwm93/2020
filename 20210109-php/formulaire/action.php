<?php
$email="test@test.fr";
$mdp="1234";

if($email==$_POST["email"]&& $mdp==$_POST["mdpo"]){
    echo "connecter";
}else{
    echo "kink";
}
?>