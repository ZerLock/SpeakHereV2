<?php 
// Vérification de la validité des informations
$bdd = new PDO('mysql:host=localhost;dbname=inscrits;charset=utf8', 'root', 'IFjkkvbmK4tqlPXL');

// Hachage des mots de passes
$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
$pass2_hache = password_hash($_POST['pass2'], PASSWORD_DEFAULT);

$res = $bdd->query('SELECT email FROM comptesutilisateurs');

// Insertion
$req = $bdd->prepare('INSERT INTO comptesutilisateurs(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
$req->execute(array(
    'pseudo' => $_POST['pseudo'],
    'pass' => $pass_hache,
    'email' => $_POST['email']));

setcookie('email', $_POST['email'], time() + 365*12*3600, null, null, false, true);
setcookie('pseudo', $_POST['pseudo'], time() + 365*12*3600, null, null, false, true);

if ($_POST['pass'] == $_POST['pass2']){
?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <title>SpeakHereV2</title>
    <link rel="stylesheet" href="style3.css" />
    <link rel="icon" type="image/png" href="images/Logo.png" />
  </head>

  <body>
    <header>

      <!-- Bouton pour accéder au paramètres du Compte Utilisateur -->
      <form method="post" action="index0-1.php">
        <input type="submit" value="Compte" id="Compte" />
      </form>

      <!-- Petit titre pour situer l'utilisateur -->
      <h1>Bienvenue dans SpeakHere !</h1>
    </header>

    <section>

      <!-- Phrase d'introduction à cette page -->
      <artcile>
        <p>Vous êtes actuelement sur la page de transition ! C'est à partir d'ici que vous pouvez accéder à tous les salons.<br />
        Veuillez cliquer sur un salon pour le rejoindre. Vous pourrez enfin parler avec vos ami(e)s !</p>
      </article><br />

      <!-- Un gros bloc pour pouvoir placé tous les liens en même temps et très rapidement -->
      <article class="Salons">
        <div id="salons1-4">
          <p><a href="index4-1.php" class="salon1">Salon#1</a> XX/15 Connectés</p><br />
          <p><a href="index4-2.php" class="salon2">Salon#2</a> XX/15 Connectés</p><br />
          <p><a href="index4-3.php" class="salon3">Salon#3</a> XX/15 Connectés</p><br />
          <p><a href="index4-4.php" class="salon4">Salon#4</a> XX/15 Connectés</p><br />
        </div>

        <div id="salon5-8">
          <p><a href="index4-5.php" class="salon5">Salon#5</a> XX/15 Connectés</p><br />
          <p><a href="index4-6.php" class="salon6">Salon#6</a> XX/15 Connectés</p><br />
          <p><a href="index4-7.php" class="salon7">Salon#7</a> XX/15 Connectés</p><br />
          <p><a href="index4-8.php" class="salon8">Salon#8</a> XX/15 Connectés</p><br />
        </div>
      </article>
    </section>

    <footer>
      <!-- Phrase d'avertissement : -->
      <p><em id="attention">ATTENTION</em> : Ces salons ne sont pas fait pour les règlements de compte ou un endroit
      pour insulter les autres utilisateurs (ce référer aux Conditions d'utilisation) !</p>
    </footer>

  </body>

</html>

<?php
}
else
{
  include('redirectionIndex2.html');
}
?>