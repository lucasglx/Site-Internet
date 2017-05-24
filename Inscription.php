<?php
$bdd = new PDO('mysql:host=127.0.0.1:8889;dbname=bdd-msh;charset=utf8', 'root', 'root');

if(isset($_POST['forminscription'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $nom = htmlspecialchars($_POST['nom']);
    $prénom = htmlspecialchars($_POST['prénom']);
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);
    $address = htmlspecialchars($_POST['adresse']);
    $city = htmlspecialchars($_POST['ville']);
    $zip = htmlspecialchars($_POST['code_postal']);
    $country = htmlspecialchars($_POST['pays']);
    $phone = htmlspecialchars($_POST['numero_tel']);
  
    
   if(!empty($_POST['pseudo']) AND !empty($_POST['nom'])AND !empty($_POST['prénom']) AND !empty($_POST['mail']) AND !empty($_POST['mdp']) AND !empty($_POST['adresse']) AND !empty($_POST['ville']) AND !empty($_POST['code_postal']) AND !empty($_POST['pays']) AND !empty($_POST['numero_tel'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) {
         if($mail == $mail2) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) 
               {
                  if($mdp == $mdp2) 
                  {
                     $insertusr = $bdd->prepare("INSERT INTO utilisateur (pseudo, nom, prénom, mail, mdp, adresse, ville, code_postal, pays, numero_tel) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                     $insertusr->execute(array($pseudo, $nom, $prénom, $mail, $mdp, $address, $city, $zip, $country, $phone));
                     $erreur = "Votre compte a bien été créé ! <a href=\"logement.php\">Poursuivre l'inscription</a>";
                  } 
                   else 
                    {
                     $erreur = "Vos mots de passe ne correspondent pas !";
                    }
               } 
                else 
                {
                  $erreur = "Adresse mail déjà utilisée !";
                }
            } 
             else 
             {
               $erreur = "Votre adresse mail n'est pas valide !";
             }
         } 
          else 
          {
            $erreur = "Vos adresses mail ne correspondent pas !";
          }
      } 
       else 
       {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
       }
   } else 
    {
      $erreur = "Tous les champs doivent être complétés !";
    }
}
?>

<html>
    
  <head>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="inscription.css" />
    <title>Création profil</title>

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

         <h1 style="text-align:center">INSCRIPTION</h1>
         <br><br>
         <form method="POST" action="">
             <fieldset>
            <table>
               <tr>
                  <td align="left">
                     <label for="pseudo">Pseudo :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                  </td>
                </tr>
                
                <tr>
                  <td align="left">
                     <label for="birth">Date de naissance :</label>
                  </td>
                  <td>
                     <input type="date" placeholder="Votre date de naissance" id="birth" name="birth" value="<?php if(isset($birth)) { echo $birth; } ?>" />
                  </td>
                </tr>
                
                <tr>
                  <td align="left">
                     <label for="surname">Prénom :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre prénom" id="prénom" name="prénom" value="<?php if(isset($prénom)) { echo $prénom; } ?>" />
                  </td>
                </tr>
                
                <tr>
                  <td align="left">
                     <label for="name">Nom :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre nom" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
                  </td>
                </tr>
                
                <tr>
                  <td align="left">
                     <label for="address">Adresse :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre adresse" id="adresse" name="adresse" value="<?php if(isset($address)) { echo $address; } ?>" />
                  </td>
                </tr>
                
                <tr>
                  <td align="left">
                     <label for="city">Ville :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre ville" id="ville" name="ville" value="<?php if(isset($city)) { echo $city; } ?>" />
                  </td>
                </tr>
                
                <tr>
                  <td align="left">
                     <label for="zip">Code postal :</label>
                  </td>
                  <td>
                     <input type="tel" placeholder="Votre code postal" id="code_postal" name="code_postal" value="<?php if(isset($zip)) { echo $zip; } ?>" />
                  </td>
                </tr>
                
                <tr>
                  <td align="left">
                     <label for="country">Pays :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre pays" id="pays" name="pays" value="<?php if(isset($country)) { echo $country; } ?>" />
                  </td>
                </tr>
                
                <tr>
                  <td align="left">
                     <label for="phone">Téléphone :</label>
                  </td>
                  <td>
                     <input type="tel" placeholder="Votre n° de téléphone" id="numero_tel" name="numero_tel" value="<?php if(isset($phone)) { echo $phone; } ?>" />
                  </td>
                </tr>
                
               <tr>
                  <td align="left">
                     <label for="mail">Mail :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                  </td>
               </tr>
                
               <tr>
                  <td align="left">
                     <label for="mail2">Confirmation du mail :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                  </td>
               </tr>
                
               <tr>
                  <td align="left">
                     <label for="mdp">Mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                  </td>
               </tr>
                
               <tr>
                  <td align="left">
                     <label for="mdp2">Confirmation du mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
                  </td>
               </tr>
                
              
                  <td></td>
                  </table>
                  <td align="right">
                     <br />
                     <input type="submit" name="forminscription" value="Je m'inscris" />
                  </td>
                    </fieldset>
                
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      
   </body>
</html>