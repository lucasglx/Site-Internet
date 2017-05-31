<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1:8889;dbname=bdd-msh;charset=utf8', 'root', 'root');

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM utilisateur WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>
<html>
   <head>
      <title>MySmartHouseConnexion</title>
      <meta charset="UTF-8" />
      <link rel="stylesheet" href="profil.css" />
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
      </div>

      <div align="center">
         <h1>Profil de <?php echo $userinfo['pseudo']; ?></h1>
         <br /><br />
         Pseudo = <?php echo $userinfo['pseudo']; ?>
         <br />
         Mail = <?php echo $userinfo['mail']; ?>
         <br />
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />

         <?php
         }
         ?>
      </div>
   </body>
</html>

<?php   
}
?>