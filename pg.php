            
 <?php
try
{
        $bdd = new PDO('mysql:host=localhost;dbname=bdd-msh;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT id, moyenne_temperature, moyenne_hum, etat FROM etat_logement');

while ($donnees = $reponse->fetch())

?>           


<html>
  <head>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="pg.css" />
    <title>MySmartHouse</title>
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
            <a href="deconnexion.php">Déconnexion</a>
            </ul>
        </div>



        <div class="contenu">
               

                <h2>Paramètres généraux</h2>
          <h2>  Choisissez une pièce </h2>
          
            <a href="http://localhost/Dernier%20Site%20MSH/pg.php"><img src="salon.png"></a>
            <a href="http://localhost/Dernier%20Site%20MSH/pg.php"><img src="cuisine.png"></a>
            <a href="http://localhost/Dernier%20Site%20MSH/pg.php"><img src="chambre.png"></a>

            <p><a href="ajouterpiece.php">Cliquez pour ajouter un autre pièce</a></p>

</div>


        <div class="tableau">

        <h2>Affichage des données des capteurs </h2>

        <table border="1">
        <div class="contenu">

        <div id="tdb">
        <table id="tableau_tdb">

          <tr>
            <td colspan="2">Affichage des données des capteurs </td>
          </tr>
          <tr>
            <td class="critere">Température<br /><br /><?php echo $moyenne_temperature ['moyenne_temperature']; ?>°C</td>
            <td class="critere">Humidité<br /><br /><?php echo $moyenne_hum ['moyenne_hum']; ?>%</td>
          </tr>
          <tr>
            <td class="critere" colspan="2">Lumière<br /><br /><?php echo $etat_lumiere ['etat_lumiere']; ?></td>
          </tr>
        </table>

        <?php

$reponse->closeCursor();

?> 
    </div>


    </body>

</html>