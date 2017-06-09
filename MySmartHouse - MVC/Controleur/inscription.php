<?php

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
       include("Modele/inscription.php");
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
                      include("Vue/accueil.php");
                  } 
                   else 
                    {
                     $erreur = "Vos mots de passe ne correspondent pas !";
                     include("Vue/connexion_erreur.php");
                    }
               } 
                else 
                {
                  $erreur = "Adresse mail déjà utilisée !";
                  include("Vue/connexion_erreur.php");
                }
            } 
             else 
             {
               $erreur = "Votre adresse mail n'est pas valide !";
               include("Vue/connexion_erreur.php");
             }
         } 
          else 
          {
            $erreur = "Vos adresses mail ne correspondent pas !";
              include("Vue/connexion_erreur.php");
          }
      } 
       else 
       {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
           include("Vue/connexion_erreur.php");
       }
   } else 
    {
      $erreur = "Tous les champs doivent être complétés !";
       include("Vue/connexion_erreur.php");
    }
}
?>