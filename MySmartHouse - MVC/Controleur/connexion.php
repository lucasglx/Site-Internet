<?php
    // Controleur pour gérer le formulaire de connexion des utilisateurs

    if(isset($_GET['cible']) && $_GET['cible']=="verif") { // L'utilisateur vient de valider le formulaire de connexion
        if(!empty($_POST['mail']) && !empty($_POST['mdp'])){ // L'utilisateur a rempli tous les champs du formulaire
            include("Modele/utilisateur.php");
            

            $reponse = mdp($db,$_POST['mail']);
            
            if($reponse->rowcount()==0){  // L'utilisateur n'a pas été trouvé dans la base de données
                $erreur = "Utilisateur inconnu";
                include("Vue/connexion_erreur.php");
            } else { // utilisateur trouvé dans la base de données
                $ligne = $reponse->fetch();
                if(sha1($_POST['mdp'])!=$ligne['mdp']){ // Le mot de passe entré ne correspond pas à celui stocké dans la base de données
                    $erreur = "Mot de passe incorrect";
                    include("Vue/connexion_erreur.php");
                } else { // mot de passe correct, on affiche la page d'accueil
                    $_SESSION["userID"] = $ligne['id'];
                    include("Vue/accueil.php");
                }
            }
        } else { // L'utilisateur n'a pas rempli tous les champs du formulaire
            $erreur = "Veuillez remplir tous les champs";
            include("Vue/connexion_erreur.php");
        }
    } else { // La page de connexion par défaut
        include("Vue/non_connecte.php");
    }

if(isset($_GET['cible'])) {
    if($_GET['cible'] == 'accueil'){
                include("Vue/accueil.php");
            } else if ($_GET['cible'] == "utilisateur"){
                include("Modele/utilisateur.php");
                $reponse = utilisateur($db);
            } else if ($_GET['cible'] == "etape2"){
                include("Vue/etape2.php");
            } else if ($_GET['cible'] == "etape3"){
                include("Vue/etape3.php");
             } else if ($_GET['cible'] == "quisommesnous"){
                echo "<script>document.location.href='http://localhost:8888/MySmartHouse%20-%20MVC/Vue/qui_sommes_nous.php'</script>";
            }
}
?>