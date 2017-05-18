<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=BDD-MSH', 'root', 'root');

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ? AND mdp = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: profil.php?id=".$_SESSION['id']);
          
          if(isset($_POST['rememberme'])) 
         
         {
            setcookie('email',$mailconnect,time()+365*24*3600,null,null,false,true);
            setcookie('password',$mdpconnect,time()+365*24*3600,null,null,false,true);
         }
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<html>
   <head>
      <title>MySmartHouse</title>
      <meta charset="utf-8">
       <link rel="stylesheet" href="style.css" />
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
           <div>
            <fieldset>
                <legend>Connexion</legend>
         <br /><br />
         <form method="POST" action="">
            <input type="email" name="mailconnect" placeholder="Mail" />
            <input type="password" name="mdpconnect" placeholder="Mot de passe" />
            <br /><br />
             <input type="checkbox" name="rememberme" id="remembercheckbox" /><label for="remembercheckbox">Se souvenir de moi</label>
            <br>
            <input type="submit" name="formconnexion" value="Se connecter !" />
              
                <p>
                    <a href="Inscription.php">Première connexion ?</a>
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
      </div>
   </body>
</html>