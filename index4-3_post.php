<?php
// Connexion à la base de données
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'IFjkkvbmK4tqlPXL');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat3 (pseudo, message) VALUES(?, ?)');
$req->execute(array($_COOKIE['pseudo'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: index4-3.php');
?>