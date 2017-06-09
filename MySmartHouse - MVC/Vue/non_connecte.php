<?php
    $entete = entete("MySmartHouse / Accueil non connecté");
    $menu = connexion();
    $contenu = "<h2>Accueil des personnes non connectées</h2>Merci d'utiliser le menu de gauche pour vous inscrire ou vous connecter.";
    $pied = pied();

    include 'gabarit.php';
?>