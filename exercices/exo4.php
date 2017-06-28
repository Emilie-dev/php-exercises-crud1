<?php

try  
{
    $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'street');
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


// Exercice 4
$reponse = $bdd->query('SELECT * FROM clients WHERE card = 1');


while($donnees = $reponse->fetch()){
  echo '<li>Clients possédant une carte : '.$donnees['lastName'].' '.$donnees['firstName'].'</li>';
 }

?>