// Génère le code HTML de l'entête

function entete($titre){
    ob_start();
    ?>
        <h1>
            <?php echo($titre);?>
        </h1>

            <ul class="fancyNav">
                <li id="active"><a href="#fr/en" class="fr/en">FR/EN</a></li>
                <li id="Page%20d'accueil"><a href="Page%20d'accueil.php">Page d'accueil</a></li>
                <li id="Quisommesnous"><a href="Qui%20sommes%20nous.php">Qui sommes nous ?</a></li>
                <li id="Contact"><a href="Contact.php">Contact</a></li>
                <li id="FAQ"><a href="FAQ.php">FAQ</a></li>

            </ul>
    
    <?php
    $entete = ob_get_clean();
    return $entete;
}

