<?php
    $entete = entete("MySmartHouse / Accueil non connecté");
    ob_start();
    ?>
        <fieldset>
            <form method="POST" action="index.php?cible=verif">
                Email
                <br/>
                <input type="text" name="identifiant"/>
                <br/>
                Mot de passe
                <br/>
                <input type="password" name="mdp"/>
                <br/>
                <input type='submit'/>
            </form>
        </fieldset>
    <?php
    $menu = ob_get_clean();
    $contenu = "<h2>Erreur dans le formulaire de connexion</h2>".$erreur;
    $pied = pied();

    include 'gabarit.php';
?>