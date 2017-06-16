
<?php 
    session_start();
    require("Modele/connexion.php");
    require("Vue/commun.php");
    
    if(!isset($_SESSION["userID"])){ // L'utilisateur n'est pas connecté
        include("Controleur/connexion.php"); // On utilise un controleur secondaire pour éviter d'avoir un fichier index.php trop gros

    if(isset($_GET['cible'])){
            if($_GET['cible'] == 'inscription'){
                include("Vue/inscription.php");
            }
        }
        
    } else { // L'utilisateur est connecté
        if(isset($_GET['cible'])) { // on regarde la page où il veut aller
            if($_GET['cible'] == 'accueil'){
                include("Vue/accueil.php");
            } else if ($_GET['cible'] == "utilisateur"){
                include("Modele/utilisateur.php");
                $reponse = utilisateur($db);
            } else if ($_GET['cible'] == "contact"){
                echo "<script>document.location.href='http://localhost:8888/MySmartHouse%20-%20MVC/Vue/contact.php'</script>";
            } else if ($_GET['cible'] == "FAQ"){
                echo "<script>document.location.href='http://localhost:8888/MySmartHouse%20-%20MVC/Vue/FAQ.php'</script>";
             } else if ($_GET['cible'] == "quisommesnous"){
                echo "<script>document.location.href='http://localhost:8888/MySmartHouse%20-%20MVC/Vue/qui_sommes_nous.php'</script>";
                
           } else if ($_GET['cible'] == "deconnexion"){
                // Détruit toutes les variables de session
                $_SESSION = array();
                /*if (isset($_COOKIE[session_name()])) {
                    setcookie(session_name(), '', time()-42000, '/');
                }*/
                session_destroy();
                include("Vue/non_connecte.php");
            }
        } else { // affichage par défaut
                include("Vue/accueil.php");
        }
    }
