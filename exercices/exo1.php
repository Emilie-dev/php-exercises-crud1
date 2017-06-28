<?php

// Je me connecte 
try  
{
    $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'street');
}
// en cas d'erreur j'affiche un message :
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


// Exercice 1 : afficher tout les clients
// on récupére tout le contenu des clients
$reponse = $bdd->query('SELECT * FROM clients');


while($donnees = $reponse->fetch()){
  echo '<li>Noms des clients : '.$donnees['lastName'].' '.$donnees['firstName'].'</li>';
 } 

?>