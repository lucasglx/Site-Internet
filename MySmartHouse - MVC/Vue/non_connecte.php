<?php
    $titre = "MySmartHouse";
    $entete = entete("MySmartHouse / Accueil non connecté");
    $contenu = connexion();
    $pied = pied();

    include 'gabarit.php';
?>