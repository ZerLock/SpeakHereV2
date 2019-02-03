<?php

$bdd = new PDO('mysql:host=localhost;dbname=inscrits;charset=utf8', 'root', 'IFjkkvbmK4tqlPXL');

$res = $bdd->query('SELECT * FROM comptesutilisateurs');

?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <title>SpeakHereV2</title>
    <link rel="stylesheet" href="style0-1.css" />
    <link rel="icon" type="image/png" href="images/Logo.png" />
  </head>

  <body>
    <header>
      <h1>Mon Compte :</h1>
      <form action="index2.php" method="post" class="box">
        <input type="submit" name="disconnect" value="Déconnection" id="deconnection"/>
      </form>
    </header>

    <section>
      <h2>Informations personnelles :</h2>
      <p>
        <?php echo '<p>Votre pseudo sur SpeakHere est : ' . $_COOKIE['pseudo'] . ' !</p>';
        echo '<p>Votre adresse mail est : ' . $_COOKIE['email'] . ' !</p>';
        echo '<p>Vous ne pouvez pas voir votre mot de passe car celui-ci à été haché et ceci n\'est pas<br />
        réversible ! Désolé mais il est préferable que ce soit ça que ce faire voler son compte ! ;) </p>'; ?>
      </p>
    </section>

    <section>
      <article>
        <h3>Voici la liste de vos ami(e)s sur SpeakHere :</h3>
        <p>Vous n'avez pas encore d'ami(e)s !</p>
      </article>
    </section>

    <footer>
      <form action="index2.php" method="post" claass="box">
        <input type="submit" name="retour" value="Quitter la page" id="quitter" />
      </form>
    </footer>

  </body>



</html>

<?php

// Fin du programmme PHP
?>