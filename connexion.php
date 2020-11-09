<?php

function bdd_connexion()
{
    //Les parametres de connexion à la base de données

    $username="root";
    $password="";
    $dbname="multiply_game_db";

    $url = "mysql:host=localhost:3306;dbname=$dbname;charset=utf8";

    try {
        //Connexion à la base de données
        $connexion = new PDO($url, $username, $password);

        //Passe le parametre local des dates à notre connexion
        $connexion->exec("set lc_time_names='fr_FR'");

        //générer des exceptions en cas d'erreur
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "connexion ok";
        //On retourne une instance de la connexion
        return $connexion;


    } catch (PDOException $e) {
        exit($e->getMessage());
    }
    return $connexion;
}
bdd_connexion();

