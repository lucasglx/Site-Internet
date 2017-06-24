<?php

    //require ("Modele/utilisateur.php");
    $user= getUserData();
    $entete = entete("MySmartHouse / Edition profil erreur");
    $contenu = editer_profil();
    $contenu .= $msg;
    $pied = pied();

    include 'gabarit.php';
?>