<?php
$bdd = new PDO('mysql:host=127.0.0.1:8889;dbname=BDD-MSH;charset=utf8', 'root', 'root');

if(isset($_POST['formpiece'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $superficie = htmlspecialchars($_POST['superficie']);
    $n_piece = htmlspecialchars($_POST['n_piece']);
    


   if(!empty($_POST['nom']) AND !empty($_POST['superficie']) AND !empty($_POST['n_piece'])) {
      $nomlength = strlen($nom);
      if($nomlength <= 255) {
            $reqnom = $bdd->prepare("SELECT * FROM piece WHERE nom = ?");
            $reqnom->execute(array($nom));

            $insertlgmnt = $bdd->prepare("INSERT INTO piece (nom, superficie, n_piece) VALUES(?, ?, ?)");
            $insertlgmnt->execute(array($nom, $superficie, $n_piece));
            $erreur = "Votre pièce a bien été créée ! <a href=\"pg.php\">Configurer la maison</a>";

      }
       else
        {
            $erreur = "Le nom de votre pièce ne doit pas dépasser 255 caractères !";
        }
   }
        else
        {
            $erreur = "Tous les champs doivent être complétés !";
        }
}
?>

<html>

  <head>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Pièce</title>

  </head>

    <body>

        <div class="topnav">
            <a class="active" href="#fr/en">Fr/En</a>
            <a href="Page%20d'accueil.php">Accueil</a>
            <a href="Qui%20sommes%20nous%20nonconnecte.php">Qui sommes nous ?</a>
            <a href="Contactnonconnecte.php">Contact</a>
            <a href="FAQnonconnecte.php">FAQ</a>
        </div>

        <div class="bienvenue">
               <img src= "img/logomysmarthousepetit.png" class="logoentreprise" alt="Logo entreprise"  />
            <h1>Édition de la pièce</h1>
        </div>
         <br /><br />
         <form method="POST" action="">
             <fieldset>
                <table>
               <tr>
                  <td align="right">
                     <label for="n_piece">Nom de la pièce :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Nom de la pièce" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
                  </td>
                </tr>

                <tr>
                  <td align="right">
                     <label for="superficie">Superficie :</label>
                  </td>
                  <td>
                     <input type="phone" placeholder="Superficie en m2" id="superficie" name="superficie" value="<?php if(isset($superficie)) { echo $superficie; } ?>" />
                  </td>
                </tr>

                <tr>
                  <td align="right">
                     <label for="n_piece">Nombre de pièces :</label>
                  </td>
                  <td>
                     <input type="phone" placeholder="Nombre de pièces" id="n_piece" name="n_piece" value="<?php if(isset($n_piece)) { echo $n_piece; } ?>" />
                  </td>
                </tr>

                <tr>
                  <td></td>
                  <td align="center">
                     <br />
                        <input type="button" value="Retour" onclick="history.go(-1)"/>
                        <input type="submit" name="formlogement" value="Suivant" />
                  </td>
               </tr>
                </table>
            </fieldset>

         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>

   </body>
</html>