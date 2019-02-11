<?php

ini_set('display_errors','off');

session_start();

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

if(session_destroy()){
	setcookie('pseudo', '');
	setcookie('id', '');
}

?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		<title>SpeakHereV2</title>
		<link rel="stylesheet" href="style2.css" />
		<link rel="icon" type="image/png" href="images/Logo.png" />
		<script>
			alert('Pour le confore de nos utilisateurs, nous utilisons des cookies pour pouvoir grader en memoire votre pseudo et autre pour vous faire eviter\nde vous reconnecter a chaque fois que vous changez de page !\nMerci de votre comprehension !');


		</script>
	</head>

	<body>
		<header> <!-- Des informations sur la page et sur l'inscription -->
			<p id="acces">C'est ici que vous devez passer pour acceder aux serveurs SpeakHere !</p>
		</header><br />

		<section> <!-- Le champ d'inscription -->
			<form class="box" action="index3.php" method="post">
				<h1>Inscription</h1>
				<input type="text" name="pseudo" id="pseudo" placeholder="pseudo" autofocus required />
				<input type="password" name="pass" id="mdp" placeholder="Mot de passe" required />
				<input type="password" name="pass2" id="mdp2" placeholder="Confirmation MDP" required />
				<input type="email" name="email" id="email" placeholder="E-Mail" required />
				<input type="checkbox" name="condUtilisation" value="Conditiond'U" required />
				<label id="condU">En cliquant sur <em>inscription</em>, vous acceptez nos <a href="index1-2.html">Conditions d'uilisations</a> !</label>
				<input type="submit" name="inscription" value="Inscription" />
			</form>

		</section>

		<section> <!-- Le champ de connection -->
			<form class="box2" action="index3-2.php" method="post">
				<h1>Connection</h1>
				<input type="text" name="Pseudo" placeholder="Pseudo" required />
				<input type="password" name="pass3" placeholder="Mot de passe" required />
				<input type="submit" name="connection" value="Connection" />
			</form>
		</section>

	</body>

</html>

<!-- Fin du programme pour cette page ! -->