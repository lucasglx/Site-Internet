<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1:8889;dbname=bdd-msh;charset=utf8', 'root', 'root');

if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();

   if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo']) {
      $newpseudo = htmlspecialchars($_POST['newpseudo']);
      $insertpseudo = $bdd->prepare("UPDATE utilisateur SET pseudo = ? WHERE id = ?");
      $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }

   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail']) {
      $newmail = htmlspecialchars($_POST['newmail']);
      $insertmail = $bdd->prepare("UPDATE utilisateur SET mail = ? WHERE id = ?");
      $insertmail->execute(array($newmail, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }

   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
      $mdp1 = sha1($_POST['newmdp1']);
      $mdp2 = sha1($_POST['newmdp2']);
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE utilisateur SET mdp = ? WHERE id = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id']));
         header('Location: profil.php?id='.$_SESSION['id']);
      } else {
         $msg = "Vos deux mots de passe ne correspondent pas !";
      }
   }
?>
<html>
   <head>
      <title>MySmartHouse</title>
      <meta charset="utf-8">
     <link rel="stylesheet" href="editerprofil.css" />
   </head>
   <body>
        <div class="topnav"><hr color="gold">
            <img src="img/logo.png" class="logo" alt="logo"><br>
            <ul>
            <a class="active" href="#fr/en">Fr/En</a>
            <a href="pg.php">Accueil</a>
            <a href="Qui%20sommes%20nous%20connecte.php">Qui sommes nous ?</a>
            <a href="Contactconnecte.php">Contact</a>
            <a href="FAQconnecte.php">FAQ</a>
            <a href = "edition%20profil.php">Editer son profil</a>
            <a href = "deconnexion.php">Deconnexion</a>
            </ul>
      </div>

      <h1 style="text-align: center">EDITER SON PROFIL</h1> <br> <br>
            <form method="POST" action="" enctype="multipart/form-data">  
             <fieldset>
            <table>
            <br>
            <tr>
               <td align="left">
               <label>Nouveau pseudo :</label>
               </td>
               <td>
               <input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>" />
               </td>
            </tr>

            <tr>
               <td align="left">
               <label>Nouveau mail :</label>
               </td>
               <td>
               <input type="text" name="newmail" placeholder="Mail" value="<?php echo $user['mail']; ?>" />
               </td>

            <tr>
               <td align="left">
               <label>Nouveau mot de passe :</label>
               </td>
               <td>
               <input type="password" name="newmdp1" p
               laceholder="Mot de passe">
               </td>
            </tr>

            <tr>
               <td align="left">
               <label>Confirmation - nouveau mot de passe :</label>
               </td>

               <td>
               <input type="password" name="newmdp2" placeholder="Confirmation du mot de passe" />
               </td>
            </tr>

               </table>
               <br>
               <p style="text-align: center">
               <input type="submit" value="Mettre à jour mon profil !"> 
               </p>
            </form>
            <?php if(isset($msg)) { echo $msg; } ?>
            <form>
         <p style="text-align: center">
        <input type="button" value="Retour" onclick="history.go(-1)">
             </p>
     </form>
     </fieldset>
   </body>
</html>
<?php   
}
else {
   header("Location: Connexion.php");
}
?>