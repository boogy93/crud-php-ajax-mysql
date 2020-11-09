<?php
//rappel de la page de connexion
require_once 'connexion.php';
//mettre la fonctions dans la variable
$connexion = bdd_connexion();

//vérifié si le $_POST est vide
if (!isset($_POST));
//rempli moi ces variables
$pseudo= trim ($_POST['pseudo']);
$mdp= trim ($_POST['mdp']);
$rMdp= trim ($_POST['rMdp']);
//reverifie, si tu as rempli le pseudo et si le mot de passe est strictement égale au mot de passe 2
if (!empty($pseudo) && ($mdp === $rMdp)){
    //requete de la bdd (tu parle a la bdd) point d'interrogation car requete preparé
    $requete = "INSERT into users(pseudo, mdp) VALUES (?, ?)";
    //si c valider, je renvoie au login pour essayer
    header("location: login.php");
    echo "étape réussie";
    try {
        $requetePrepare = $connexion->prepare($requete);
        $requetePrepare->execute([$pseudo, $mdp]);
    } catch (Exception $exception) {
        //
        $exception->getMessage();
    }
}
