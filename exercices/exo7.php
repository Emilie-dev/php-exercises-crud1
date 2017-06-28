<?php

try  
{
    $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'street');
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


// Exercice 7
$reponse = $bdd->query('SELECT * FROM clients WHERE card = 1');


while($donnees = $reponse->fetch()){
  echo '<li>Nom : '.$donnees['lastName'].' Prénom : '.$donnees['firstname'].'Date de naissance : '.$donnees['birthDate'].' Carte de fidélité : Oui Numéro de carte : '.$donnees['cardNumber'].'</li>';
 }

$reponse = $bdd->query('SELECT * FROM clients WHERE card = 0');


while($donnees = $reponse->fetch()){
  echo '<li>Nom : '.$donnees['lastName'].' Prénom : '.$donnees['firstname'].'Date de naissance : '.$donnees['birthDate'].' Carte de fidélité : Non</li>';
 }

?>