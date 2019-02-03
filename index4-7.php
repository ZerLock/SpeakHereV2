<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
        <link rel="stylesheet" href="style4.css" />
        <link rel="icon" type="image/png" href="images/Logo.png" />
    </head>
    <body>

    <h1>Salon SpeakHere #7 :</h1>
    
    <form class="box" action="index4-7_post.php" method="post">
        <p>
        <label for="message">Inscrivez votre message ici :</label><br />
        <textarea name="message" id="message" required ></textarea>

        <input type="submit" value="Envoyer" />
  </p>
    </form>

    <!-- Bouton pour rafraichir la page pour afficher tous les autres messages ! -->
    <form class="box" action="index4-1.php" method="post">
        <input type="submit" value="Rafraîchir la page" />
    </form>

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

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message FROM minichat7 ORDER BY ID DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
  echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

?>
    </body>
</html>
