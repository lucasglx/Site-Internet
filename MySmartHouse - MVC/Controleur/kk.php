<?php

if(isset($_GET['cible']) && $_GET['cible']=="verif")

{
	if (isset($_POST['formconnexion'])) 
	{
        
		$mail = htmlspecialchars($_POST['mail']);
		$mdp= sha1($_POST['mdp']);

		if (!empty($mail) AND !empty($mdp))
		{
            include("Modele/utilisateur.php")
			$reponse = connect($bdd, $mail, $mdp);

			if ($reponse->rowcount()==0)
			{
				$erreur= "Utilisateur inconnu";
				$test = $erreur[1];
				include("Vue/connexion_erreur.php");
			}
			else
			{
				$userinfo = $reponse->fetch();

				$reponse = readconnexion($bdd, $mailconnect);
				$data = $reponse -> fetch();

				if ($mdp != $userinfo['mdp']) 
				{
					$erreur = "Mot de passe incorrect et/ou utilisateur inconnu";
					include("Vue/connexion_erreur.php");
				}
				
				else
				{
					$_SESSION['id'] = $userinfo['id'];
					$_SESSION['mail'] = $userinfo['mail'];
					include("Vue/accueil.php");
				}
			}
		}
		else
		{
			$erreur = "Veuillez remplir tous les champs !";
			include("Vue/connexion_erreur.php");
		}
	}

	
}
elseif(isset($_GET['cible']) && $_GET['cible']=="cguA")
{

}
else
{
	include("vue/connexion.php");
}


?>