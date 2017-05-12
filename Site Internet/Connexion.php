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
    <link rel="stylesheet" href="main.css" />
    <title>Connexion</title>

  </head>

    <body>

        <div class="topnav">
            <a class="active" href="#fr/en">Fr/En</a>
            <a href="Page%20d'accueil.html">Accueil</a>
            <a href="Qui%20sommes%20nous.html">Qui sommes nous ?</a>
            <a href="Contact.html">Contact</a>
            <a href="FAQ.html">FAQ</a>
        </div>

        <div class="bienvenue">
               <img src= "logomysmarthousepetit.png" class="logoentreprise" alt="Logo entreprise"  />
            <h1>Connexion</h1>
        </div>
         <br /><br />
         <form method="POST" action="">
            <input type="email" name="mailconnect" placeholder="Mail " />
            <input type="password" name="mdpconnect" placeholder="Mot de passe " />
            <input type="submit" name="formconnect"  value="Se connecter" />
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      
   </body>
</html>