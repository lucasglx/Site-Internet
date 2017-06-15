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
    $connexion = ob_get_clean();
    return $connexion;
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
function entete(){
    ob_start();
    ?>
        <h1>
            <?php echo($titre);?>
        </h1>

          <div class="topnav">
            <a href="index.php?cible=accueil">Accueil</a>
            <a href="index.php?cible=quisommesnous">Qui sommes nous ?</a>
            <a href="index.php?cible=contact">Contact</a>
            <a href="FAQ.php">FAQ</a>
            <a href="index.php?cible=deconnexion">Deconnexion</a>
        </div>

    <?php
    $entete = ob_get_clean();
    return $entete;
}

// Génère le code HTML du pied de page
// même code pour toutes les pages
function pied(){
    ob_start();
    ?>
        <span style="font-style:italic;">MySmartHouse</span>
    <?php
    $pied = ob_get_clean();
    return $pied;
}

function image(){
    ob_start();
    ?>
        <img src= "img/logomysmarthousepetit.png" class="logoentreprise" alt="Logo entreprise"  />
    <?php
    $image = ob_get_clean();
    return $image;
}

function contact(){
    ob_start();
    ?>
        <h1 style="text-align:center">CONTACTEZ-NOUS</h1><br>

                <fieldset>
                    
                <div class="logocontact">
                    <a href="mailto:mysmarthouse.contact@gmail.com" class="logoemail" target="_blank"><img src="img/email.jpg" alt="Email">
                    <br>Envoyez un mail</a>
                <p>
                </div> 
                    
                <div class="logocontact">
                <p><img src="img/telephone.jpg" class="logotelephone" alt="telephone"/></p>
                    <p><I><B>+33 1 23 45 67 89</B></I></p>
                </div>
                    
                <div class="logocontact">
                <p><a href="https://www.facebook.com/My-Smart-House-1021275438007096/?fref=ts" class="logofacebook" target="_blank"><img src="img/facebook.png" alt="Facebook" ><br>Likez notre page</a></p>
                </div>
                    
               </fieldset>
               <br>
               <br>
               <br>
               <h1 style="text-align:center;">TROUVEZ-NOUS FACILEMENT</h1><br>
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d656.6883495279876!2d2.280302766448461!3d48.82476644102272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe0d3eb2ad501cb27!2sISEP!5e0!3m2!1sfr!2sfr!4v1494930808024" width="900" height="600" frameborder="0"></iframe>
            <br><br><br>
        <?php
        $contact = ob_get_clean();
        return $contact;
}

function quisommesnous(){
    ob_start();
    ?>

        <h1 style="text-align: center">PRESENTATION DE L'ENTREPRISE</h1> <br>
            
        <h2 style="color: #2874A6"><img src="img/historique.jpg" class="historique" alt="Livre" align="top" height="40" width="40"/><I>Historique</I></h2> 
            
        <p style="font-size: 17">MySmartHouse est une entreprise grandissante qui a été créée en 2017. Issue d'une équipe d'étudiants pluriculturels de l'ISEP, elle a su trouvé au travers de son premier client DOMISEP un défit à la hauteur des attentes de l'equipe qui en est à la tête.
        </p> 

        <br> 

        <h2 style="color:#2874A6"><img src="img/Objectif.jpg" class="objectif" alt="objectif" align="top" height="40" width="40"/><I>Objectif</I></h2>
            
        <p style="font-size: 17">Fermez les yeux, et imaginez un monde où votre maison répond à vos besoins. Luminosité, température, humidité, sécurité... Tout est sous votre contrôle et ce en un seul un clic ! MySmartHouse est un outil qui vous permettra d’être connecté à votre domicile depuis n’importe où et à n’importe quel moment. Grâce à notre base de données et à notre plateforme Web MySmartHouse.fr, le client pourra avoir accès au contrôle de sa maison à distance.
        </p>
        
        <br> 

        <h2 style="color:#2874A6"><img src="img/equipe.jpg" class="equipe" alt="bonhomme" align="top" height="40" width="40"/>  <I>Derrière MySmartHouse ?</I></h2>
            
        <br>
            
        <p style="font-size:17"><img src="img/lucas.png" class="photo" alt="Photo de Lucas" align="middle" height="100" width="100"/> Lucas Gallix, 22ans : <I>"Les bases de données, ça me connait ! " </I>
        </p>
        
        <br>
            
        <p style="font-size:17"><img src="img/bouchra.png" class="photo" alt="Photo de Bouchra" align="middle" height="100" width="100"/> Bouchra Djelali, 20 ans : <I>"Vos besoins sont notre priorité."</I>
        </p>
        
        <br>
            
        <p style="font-size:17"><img src="img/julie.png" class="photo" alt="Photo de Julie" align="middle" height="100" width="100"/> Julie Lembourg, 20 ans : <I>"La coopération avant tout." </I>
        </p>
           
        <br>
            
        <p style="font-size:17"><img src="img/yann.png" class="photo" alt="Photo de Yann" align="middle" height="100" width="100"/>Yann De Parscau, 22 ans :
        <I>"L'informatique, c'est l'avenir."</I>
        </p>
            
        <br>
            
        <p style="font-size:17"><img src="img/sara.png" class="photo" alt="Photo de Sara" align="middle" height="100" width="100"/> Sara Atine, 21 ans : <I>"L'automatisation n'est pas qu'une simple option."</I>
        </p>
            
        <br>
            
        <p style="font-size:17"><img src="img/paul-emile.png" class="photo" alt="Photo de Paul-emile" align="middle" height="100" width="100"/> Paul-Emile Chayet, 21 ans :<I>"En route vers l'avenir."</I>
        </p>
            
        <br>
            
        <p style="font-size:17"><img src="img/paul.png" class="photo" alt="Photo de Paul" align="middle" height="100" width="100"/> Paul Chasseuil, 21 ans : <I>"A demain !"</I>
        </p>

        <?php
        $quisommesnous = ob_get_clean();
        return $quisommesnous;
}



?>