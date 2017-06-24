<?php
    include('Vue/commun.php');

    $entete = entete("MySmartHouse / Accueil non connecté");
    $contenu = forminscription();
    $contenu .= $erreur;
    $pied = pied();

    include 'gabarit.php';
?>