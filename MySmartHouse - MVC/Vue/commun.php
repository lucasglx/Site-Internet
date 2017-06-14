<?php

// Génère le code HTML du formulaire de connexion
function connexion(){
    ob_start();
    ?>
        <fieldset>
            <form method="POST" action="index.php?cible=verif">
                <legend>Connexion</legend> <br>
        
                <p>
                    <label for="email">Adresse mail :
                    </label><br>
                    <input type="email" name="mail" placeholder="Mail " />
                
                
                <br>
                    <label for="password">Mot de passe :
                    </label><br>
                    <input type="password" name="mdp" placeholder="Mot de passe " />
                
                
                <p>
                    <input type="submit" value="Se connecter"/>
                </p>
                
                <p>
                    <a href="index.php?cible=inscription">Première connexion ?</a>
                </p>
                
                <p>
                    <a href="oubli_MDP.php">Mot de passe oublié ?</a>     
                </p>
                        
                </form>
                <?php
                    if(isset($erreur)) {
                    echo '<font color="red">'.$erreur."</font>";
                    }
                ?>
                
            </fieldset>
    <?php
    $formulaire = ob_get_clean();
    return $formulaire;
}

//Génère le code HTML de l'inscription
function inscription(){
    ob_start();
    ?>
        <div class="bienvenue">
               
            <h1>Inscription</h1>
        </div>
         <br/>
             <fieldset>
                    <table>
                <tr>
                    <td align="right">
                     <label for="pseudo">Pseudo :</label>
                    </td>
                    <td>
                     <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                    </td>
                </tr>
                
                <tr>
                  <td align="right">
                     <label for="birth">Date de naissance :</label>
                  </td>
                  <td>
                     <input type="date" placeholder="Votre date de naissance" id="birth" name="birth" value="<?php if(isset($birth)) { echo $birth; } ?>" />
                  </td>
                </tr>
                
                <tr>
                  <td align="right">
                     <label for="surname">Prénom :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre prénom" id="prénom" name="prénom" value="<?php if(isset($prénom)) { echo $prénom; } ?>" />
                  </td>
                </tr>
                
                <tr>
                  <td align="right">
                     <label for="name">Nom :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre nom" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
                  </td>
                </tr>
                
                <tr>
                  <td align="right">
                     <label for="address">Adresse :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre adresse" id="adresse" name="adresse" value="<?php if(isset($address)) { echo $address; } ?>" />
                  </td>
                </tr>
                
                <tr>
                  <td align="right">
                     <label for="city">Ville :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre ville" id="ville" name="ville" value="<?php if(isset($city)) { echo $city; } ?>" />
                  </td>
                </tr>
                
                <tr>
                  <td align="right">
                     <label for="zip">Code postal :</label>
                  </td>
                  <td>
                     <input type="tel" placeholder="Votre code postal" id="code_postal" name="code_postal" value="<?php if(isset($zip)) { echo $zip; } ?>" />
                  </td>
                </tr>
                
                <tr>
                  <td align="right">
                     <label for="country">Pays :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre pays" id="pays" name="pays" value="<?php if(isset($country)) { echo $country; } ?>" />
                  </td>
                </tr>
                
                <tr>
                  <td align="right">
                     <label for="phone">Téléphone :</label>
                  </td>
                  <td>
                     <input type="tel" placeholder="Votre n° de téléphone" id="numero_tel" name="numero_tel" value="<?php if(isset($phone)) { echo $phone; } ?>" />
                  </td>
                </tr>
                
               <tr>
                  <td align="right">
                     <label for="mail">Mail :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                  </td>
               </tr>
                
               <tr>
                  <td align="right">
                     <label for="mail2">Confirmation du mail :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                  </td>
               </tr>
                
               <tr>
                  <td align="right">
                     <label for="mdp">Mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                  </td>
               </tr>
                
               <tr>
                  <td align="right">
                     <label for="mdp2">Confirmation du mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
                  </td>
               </tr>
                
               <tr>
                  <td></td>
                  <td align="center">
                     <br />
                     <input type="submit" name="forminscription" value="Je m'inscris" />
                  </td>
               </tr>
            </table>
                 
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
    </fieldset>

    <?php
    $inscription = ob_get_clean();
    return $inscription;
}


// Génère le code HTML de l'entête
function entete($titre){
    ob_start();
    ?>
        <h1>
            <?php echo($titre);?>
        </h1>
    <?php
    $entete = ob_get_clean();
    return $entete;
}


// Génère le code HTML du menu

// le lien associé à l'étape courante est mis en couleur
function menu($contenu){
    ob_start();
    ?>
        <br/><li><a href="index.php?cible=accueil">Accueil</a></li>
        <br/><li><a href="index.php?cible=contact">Contact</a></li>
        <br/><li><a href="index.php?cible=deconnexion">Deconnexion</a></li>
    <?php
    $menu = ob_get_clean();
    return $menu;
}

// Génère le code HTML du pied de page
// même code pour toutes les pages
function pied($pied){
    ob_start();
    ?>
        <span style="font-style:italic;">MySmartHouse</span>
    <?php
    $pied = ob_get_clean();
    return $pied;
}

function image($image){
    ob_start();
    ?>
        <img src= "img/logomysmarthousepetit.png" class="logoentreprise" alt="Logo entreprise"  />
    <?php
    $image = ob_get_clean();
    return $image;
}

?>
