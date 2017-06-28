<?php

try  
{
    $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'street');
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


// Exercice 6
$reponse = $bdd->query('SELECT * FROM shows ORDER BY title');


while($donnees = $reponse->fetch()){
  echo '<li>'.$donnees['title'].' par : '.$donnees['performer'].' , le '.$donnees['date'].' à '.$donnees['startTime'].'</li>';
 }

?>
