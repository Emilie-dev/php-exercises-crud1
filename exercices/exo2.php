<?php

try  
{
    $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'street');
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


// Exercice 2
$reponse = $bdd->query('SELECT * FROM showTypes');


while($donnees = $reponse->fetch()){
  echo '<li>Spectacles possibles : '.$donnees['type'].'</li>';
 }

?>