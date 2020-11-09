<?php

session start();


//rappel de la page de connexion
require_once 'connexion.php';
//mettre la fonctions dans la variable
$connexion = bdd_connexion();

//vérifié si le $_POST est vide
session_start();
		if (isset($_SESSION['msg_erreur'])) {
            if ($_SESSION['msg_erreur'] == "") {
                $email = "";
                $mdp = "";
            } else {
                //rempli moi ces variables
                $email = $_SESSION['email'];
                $mdp = $_SESSION['mdp'];
            }
        }
if (empty($email)) {
    $_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Email non renseigné<br>";
} else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Email invalide<br>";
    }
}
if (empty($mdp)) {
    $_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Mot de passe non renseigné<br>";
}

if (empty($_SESSION['msg_erreur'])) {
