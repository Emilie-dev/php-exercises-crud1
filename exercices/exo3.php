<?php

try  
{
    $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'street');
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


// Exercice 3
$reponse = $bdd->query('SELECT * FROM clients LIMIT 20');


while($donnees = $reponse->fetch()){
  echo '<li>Noms des 20 premiers clients: '.$donnees['lastName'].' '.$donnees['firstName'].'</li>';
 }

?>