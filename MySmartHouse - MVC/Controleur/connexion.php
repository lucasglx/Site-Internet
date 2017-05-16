<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=BDD-MSH;charset=utf8', 'root', 'root');

if(isset($_POST['formconnect']))
{
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']); 
    if (!empty($mailconnect) AND !empty($mdpconnect))
    {
        $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ? AND mdp = ?");
        $requser-> execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount();
        if ($userexist == 1)
        {
            $userinfo = $requser-> fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];
            header("Location : profil.php?id=".$_SESSION['id']);
        }
        else 
        {
            $erreur = "Mauvais mail ou mot de passe";
            include("Vue/connexion_erreur.php");
        }
    }
    else
    {
        $erreur = "Tous les champs doivent être remplis";
    }
}

?>