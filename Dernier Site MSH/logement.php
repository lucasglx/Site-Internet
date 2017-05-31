<?php
$bdd = new PDO('mysql:host=127.0.0.1:8889;dbname=BDD-MSH;charset=utf8', 'root', 'root');

function recup_id($bdd,$id)
	{
		$reponse= $bdd -> prepare("SELECT id FROM utilisateur");
		$reponse->execute(array($id));
        $id = htmlspecialchars($_POST['id_utilisateur']);
		return $reponse;
        
	}

if(isset($_POST['formlogement'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $superficie = htmlspecialchars($_POST['superficie']);
    $n_piece = htmlspecialchars($_POST['n_piece']);


   if(!empty($_POST['nom']) AND !empty($_POST['superficie']) AND !empty($_POST['n_piece'])) {
      $nomlength = strlen($nom);
      if($nomlength <= 255) {
            $reqnom = $bdd->prepare("SELECT * FROM logement WHERE nom = ?");
            $reqnom->execute(array($nom));

            $insertlgmnt = $bdd->prepare("INSERT INTO logement (nom, superficie, n_piece) VALUES(?, ?, ?)");
            $insertlgmnt->execute(array($nom, $superficie, $n_piece));
            $erreur = "Votre logement a bien été créé ! <a href=\"ajouter%20piece.php\">Ajouter une pièce</a>";

      }
       else
        {
            $erreur = "Le nom de votre logement ne doit pas dépasser 255 caractères !";
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
    <link rel="stylesheet" href="Logement.css" />
    <title>Logement</title>

  </head>

    <body>

        <div class="topnav"><hr color="gold">
            <img src="img/logo.png" class="logo" alt="logo"><br>
            <ul>
            <a class="active" href="#fr/en">Fr/En</a>
            <a href="Page%20d'accueil.php">Accueil</a>
            <a href="Qui%20sommes%20nous%20nonconnecte.php">Qui sommes nous ?</a>
            <a href="Contactnonconnecte.php">Contact</a>
            <a href="FAQnonconnecte.php">FAQ</a>
            </ul>
        </div>

            <h1 style="text-align: center">EDITION DU LOGEMENT</h1>
        
         <br /><br />
         <form method="POST" action="">
             <fieldset>
             <br>
                <table>
               <tr>
                  <td align="left">
                     <label for="n_piece">Nom du logement :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Nom du logement" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
                  </td>
                </tr>

                <tr>
                  <td align="left">
                     <label for="superficie">Superficie :</label>
                  </td>
                  <td>
                     <input type="phone" placeholder="Superficie en m2" id="superficie" name="superficie" value="<?php if(isset($superficie)) { echo $superficie; } ?>" />
                  </td>
                </tr>

                <tr>
                  <td align="left">
                     <label for="n_piece">Nombre de pièces :</label>
                  </td>
                  <td>
                     <input type="phone" placeholder="Nombre de pièces" id="n_piece" name="n_piece" value="<?php if(isset($n_piece)) { echo $n_piece; } ?>" />
                  </td>
                </tr>

                <tr>
                  <td></td>
                  </table>
                  <br>
                  <p style="text-align: center">
                        <input type="button" value="Retour" onclick="history.go(-1)"/>
                        <input type="submit" name="formlogement" value="Suivant" />
                  <p>
            </fieldset>

         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>

   </body>
</html>