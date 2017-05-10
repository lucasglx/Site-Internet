<?php 
 
$bdd = new PDO('mysql:host=localhost;dbname=BDD-MSH;charset=utf8', 'root', 'root');

if (isset($_POST['forminscription']))
{
    if(!empty($_POST['pseudo']) AND !empty($_POST['surname']) AND !empty($_POST['name']) AND !empty($_POST['address']) AND !empty($_POST['city']) AND !empty($_POST['zip']) AND !empty($_POST['country']) AND !empty($_POST['phone']) AND !empty($_POST['email']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $surname = htmlspecialchars($_POST['surname']);
        $name = htmlspecialchars($_POST['name']);
        $address = htmlspecialchars($_POST['address']);
        $city = htmlspecialchars($_POST['city']);
        $zip = htmlspecialchars($_POST['zip']);
        $country = htmlspecialchars($_POST['country']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1 ($_POST['mdp']);
        $mdp2 = sha1 ($_POST['mdp2']);
        
        $pseudolength = strlen($pseudo);
        if ($pseudolength <= 255)
        {
            if (filter_var($))
                if($mdp == $mdp2)
                {

                }
                else
                {
                    $erreur = "Les mots de passe ne correspondent pas !"
                }
        }
        else
        {
            $erreur = "Le pseudo ne doit pas dépasser 255 caractères !";
        }
    }
    else
    {
        $erreur = "Tous les champs ne sont pas remplis ! ";
    }
}

?>

<html>
    
  <head>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="main.css" />
    <title>Création profil</title>

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
            <h1>Première connexion</h1>
        </div>
        
            <fieldset>
                <legend>Créez votre profil</legend>
                
                <p>
                    <label for="gender">Civilité :</label><br />
                    <select name="gender" id="gender">
                        <option value="male">M.</option>
                        <option value="female">Mme.</option>
                    </select>
              
                    <label for="birth">Date de naissance :
                    </label>
                    <input type="date" name="birth" id="birth" required />
                </p>
                
                <p>
                    <label for="surname">Prénom :
                    </label>
                    <input type="text" name="surname" id="surname" required />
                    
                    <label for="name">Nom :
                    </label>
                    <input type="text" name="name" id="name" required />
                
                </p>
                
                <p>
                    <label for="pseudo">Pseudo :
                    </label>
                    <input type="text" name="pseudo" id="pseudo" required />
                    
                    <label for="address">Adresse :
                    </label>
                    <input type="text" name="address" id="address" required />
                    
                </p>
                
                <p>
                    <label for="city">Ville :
                    </label>
                    <input type="text" name="city" id="city" required />
                    
                    <label for="zip">Code Postal :
                    </label>
                    <input type="tel" name="zip" id="zip" required />
                </p>
                
                <p>
                    <label for="country">Pays :
                    </label>
                    <input type="text" name="country" id="country" required/>
                    
                    <label for="phone">Numéro de téléphone :
                    </label>
                    <input type="tel" name="phone" id="phone" required />
                </p>
                
                <p>
                    <label for="email">Adresse mail :
                    </label>
                    <input type="email" name="email" id="email" required placeholder="Votre mail" />
                </p>
                
                <p>
                    <label for="mdp">Mot de passe :
                    </label>
                    <input type="password" name=mdp id="mdp" required placeholder="Votre mot de passe" />
                </p>
                
                <p>
                    <label for="mdp2">Confirmez votre mot de passe :
                    </label>
                    <input type="password" name="mdp2" id="mdp2" required placeholder="Confirmez votre mdp" />
                </p>
                
                    <form>
                    <input type="button" value="Annuler" onclick="history.go(-1)" />
                    </form>
                
                    
                    <input type="submit" name="forminscription" value="Continuer"/>
                
            </fieldset>

        <?php
        if(isset($erreur))
        {
            echo $erreur;
        }
        ?>
    </body>

</html>
