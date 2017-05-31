<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1:8889;dbname=bdd-msh', 'root', 'root');

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
       <link rel="stylesheet" href="connexion.css" />
   </head>
    <body>
         <div class="topnav"><hr color="gold">
            <img src="img/logo.png" class="logo" alt="logo"><br>
            <ul>
            <a class="active" href="#fr/en"><B>FR/EN</B></a>
            <a href="Page%20d'accueil.php">Accueil</a>
            <a href="Qui%20sommes%20nous.php">Qui sommes nous ?</a>
            <a href="Contact.php">Contact</a>
            <a href="FAQ.php">FAQ</a>
            </ul>

        </div>    
         
             
            <h1 style="text-align: center">BIENVENUE DANS L'ESPACE CLIENT</h1>
            <br> <br>
           <div class="pageconnexion">
            <fieldset>
         <U><h3 style="text-align:center">CONNECTEZ-VOUS</h3></U>
         <form method="POST" action="">
            <p><input type="email" name="mailconnect" placeholder="Mail*" /></p> 
            <p><input type="password" name="mdpconnect" placeholder="Mot de passe*" /></p>
             <p><input type="checkbox" name="rememberme" id="remembercheckbox" /><label for="remembercheckbox">Se souvenir de moi</label></p>
            <p style="text-align:center"><input type="submit" name="formconnexion" value="Se connecter !"/></p>
              
                <p style="text-align:right">
                    <a href="inscription.php">Première connexion ?</a>
                </p>
                
                <p style="text-align:right">
                    <a href="oubli_MDP.php">Mot de passe oublié ?</a>    
                </p>
                <p style="text-align:left"><I>*Champs obligatoires</I><p>
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