<?php
/**
 * creation d'un formulaire avec comme information
 * email, mdp et un boutton Envoyer
 * recuperation de formulaire dans le fichier action.php
 * et controler si l'email et mdp sont correspond 
 * dans le fichier action.php l'email est test@test.fr et mdp est 1234
 */
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="action.php">
email<input type="mail" name="email" id="email">
mdp<input type="password" name="mdpo" id="mdp">
<button type="submit">Envoyer</button>
</form>
     
     
    
</body>
</html>

 