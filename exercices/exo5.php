<?php

try  
{
    $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'street');
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


// Exercice 5
$reponse = $bdd->query('SELECT * FROM clients WHERE lastName LIKE "m%" ORDER BY lastName');


while($donnees = $reponse->fetch()){
  echo '<li>Nom : '.$donnees['lastName'].' Prénom : '.$donnees['firstName'].'</li>';
 }

?>