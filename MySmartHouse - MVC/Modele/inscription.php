<?php
    require("Modele/connexion.php");

    // fonction qui cherche le mot de passe d'un utilisateur avec un mail dans la base de données
    function pseudo($db,$identifiant){
        $insertusr = $bdd->prepare("INSERT INTO utilisateur (pseudo)");
        return $reponse;
    }

    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
    function nom($db){
        $insertusr = $bdd->prepare("INSERT INTO utilisateur (nom)");
        return $reponse;
    }

    function prénom($db){
        $insertusr = $bdd->prepare("INSERT INTO utilisateur (prénom)");
        return $reponse;
    }

    function mail($db){
        $insertusr = $bdd->prepare("INSERT INTO utilisateur (mail)");
        return $reponse;
    }
    
    function adresse($db){
        $insertusr = $bdd->prepare("INSERT INTO utilisateur (pseudo)");
        return $reponse;
    }
?>
