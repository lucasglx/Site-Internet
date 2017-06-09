<?php


    require("Controleur/connexion.php");

    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
    function mdp($bdd,$identifiant){
        $reponse = $bdd->query('SELECT id, mdp FROM utilisateur WHERE identifiant="'.$identifiant.'"');
        return $reponse;
    }

    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
    function utilisateur($bdd){
        $reponse = $bdd->query('SELECT email FROM utilisateur');
        return $reponse;
    }

    
?>
