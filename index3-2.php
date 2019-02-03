<?php

ini_set('display_errors','off');

$bdd = new PDO('mysql:host=localhost;dbname=inscrits;charset=utf8', 'root', 'IFjkkvbmK4tqlPXL');

//  Récupération de l'utilisateur et de son pass hashé
$req = $bdd->prepare('SELECT id, pass FROM comptesutilisateurs WHERE pseudo = :pseudo');
$req->execute(array(
    'pseudo' => htmlspecialchars($_POST['Pseudo'])));
$resultat = $req->fetch();

$res = $bdd->query('SELECT email FROM comptesutilisateurs');

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['pass3'], $resultat['pass']);

// $pass3_hache = password_hash($_POST['pass3'], PASSWORD_DEFAULT);

if (!$resultat)
{   
    include('redirectionIndex2.html');
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $_POST['pseudo'];


        setcookie('email', $_res['email'], time() + 365*12*3600, null, null, false, true);
        setcookie('pseudo', $_POST['Pseudo'], time() + 365*12*3600, null, null, false, true);

        include('choixSalons.php');

    }
    else
    {
        include('redirectionIndex2.html');
    }
} 

?>
