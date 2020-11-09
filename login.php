<!doctype html>


<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.scss"

</head>

<body>

<form class="w3-container" action="" method="post">

    <br>
    <label>pseudo</label>
    <input class="w3-input w3-text-blue" type="text" name="pseudo" value="" autofocus>
    <br>
    <br>
    <label>mot de passe</label>
    <input class="w3-input w3-text-blue" type="text" name="mdp" value="">
    <br>
    <br>
    <button type="submit" id="valider">Valider</button>

    <p>Pour créer un compte cliquez <a href="newUser.php">ici</a></p>

</form>

<?php
//on récupère les infos saisies
$pseudo = trim(($_POST['pseudo']));
$mdp = trim($_POST['mdp']);

//On teste que les infos sont bien correctement saisies (pseudo non vide)
$_SESSION['pseudo'] = $pseudo;
$_SESSION['mdp'] = $mdp;



?>

</body>
</html>