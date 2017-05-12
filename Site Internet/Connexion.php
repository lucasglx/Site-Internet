<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=BDD-MSH;charset=utf8', 'root', 'root');

if(isset($_POST['formconnect']))
{
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']); 
    if (!empty($mailconnect) AND !empty($mdpconnect))
    {
        $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ? AND mdp = ?");
        $requser-> execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount();
        if ($userexist == 1)
        {
            $userinfo = $requser-> fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];
            header("Location : profil.php?id=".$_SESSION['id']);
        }
        else 
        {
            $erreur = "Mauvais mail ou mot de passe";
        }
    }
    else
    {
        $erreur = "Tous les champs doivent être remplis";
    }
}

?>
<html>

  <head>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title>MySmartHouse</title>

  </head>

    <body>

        <div class="topnav">
            <a class="active" href="#fr/en">Fr/En</a>
            <a href="Page%20d'accueil.php">Accueil</a>
            <a href="Qui%20sommes%20nous.php">Qui sommes nous ?</a>
            <a href="Contact.php">Contact</a>
            <a href="FAQ.php">FAQ</a>
        </div>
         
        <div class="bienvenue">
               <img src= "img/logomysmarthousepetit.png" class="logoentreprise" alt="Logo entreprise"  />
            <h1>Bienvenue sur MySmartHouse</h1>
        </div>
            
            <fieldset>
                <legend>Connexion</legend>
        
                <p>
                    <label for="email">Adresse mail :
                    </label><br>
                    <form method="POST" action="">
                    <input type="email" name="mailconnect" placeholder="Mail " />
                
                
                <br>
                    <label for="password">Mot de passe :
                    </label><br>
                    <input type="password" name="mdpconnect" placeholder="Mot de passe " />
                
                
                <p>
                    <input type="submit" name="formconnect"  value="Se connecter" />
                </p>
                
                <p>
                    <a href="Inscription.php">Première connexion ?</a>
                </p>
                
                <p>
                    <a href="file:///mnt/monster/home/eleves/2019/pchayet/Bureau/APP/oublie_mdp.html">Mot de passe oublié ?</a>
                </p>        
                
                </form>
                <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
                
            </fieldset>
        
        
            
                
       
    </body>
</html>
