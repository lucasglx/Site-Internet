
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


<h1>Paramètrer votre maison </h1>
<ul id="onglets">
    <li class="actif">Paramètres généraux</li>
    <li>Pièce par pièce</li>
    <li>Choisissez votre mode</li>
</ul>
<div id="contenu">
    <div class="item">
        <h2>Paramètres généraux</h2>

         <table id="tableau_tdb">


          <thead>
      <tr>
        <th>#</th>
        <th>  Luminosité   <br /></th>
        <th> Humidité  </th>
        <th> Température  </td></th>
      </tr>
    </thead>
    <p>  </p>
    <tbody>

      <tr>
        <td>Salon</td>
        <td>     ON</td>
        <td>10 %</td>
        <td>25 C</td>
      </tr>
      <tr>
        <td>  Chambre</td>
        <td>      OFF</td>
        <td>20%</td>
        <td>30 C</td>
        </tr>
        <tr>
        <td>  Chambre</td>
        <td>     OFF</td>
        <td>20%</td>
        <td>30 C</td>
        </tr>
        <tr>
        <td>  Chambre</td>
        <td>      OFF</td>
        <td>20%</td>
        <td>30 C</td>
        </tr>

    </tbody>

        </table>
      
       
    </div>
    <div class="item">
        <h2>Pièce par pièce</h2>

         <a href="http://localhost/Dernier%20Site%20MSH/definition.php"><img src="salon.png"></a>
            <a href="http://localhost/Dernier%20Site%20MSH/definition.php"><img src="cuisine.png"></a>
            <a href="http://localhost/Dernier%20Site%20MSH/definition.php"><img src="chambre.png"></a>
            <a href="http://localhost/Dernier%20Site%20MSH/definition.php"><img src="chambre.png"></a>

            <p><a href="ajouterpiece.php">Cliquez pour ajouter un autre pièce</a></p>
    </div>

    <div class="item">
                    <img src="power.png" class="power" height="42" width="42">
                    <h1> Mode Economie </h1>
                    <h3>Faites des économies tout en pensant à la planète</h3>
                        <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="cmn-toggle-1"></label>

                        <img src="avion.png" class="avion" height="42" width="42">
                    <h1> Mode Voyage </h1>
                    <h3>Minimisez votre consommation d'énergie</h3>
                        <input id="cmn-toggle-2" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="cmn-toggle-2"></label>

                        <img src="cadenas.png" class="cadenas" height="42" width="42">
                    <h1> Mode Sécurité </h1>
                    <h3>Quittez votre domicile l'esprit tranquille</h3>
                        <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="cmn-toggle-3"></label>

                         <img src="ampoule.png" class="ampoule" height="42" width="42">
                    <h1> Gestion automatique de la luminosité </h1>
                    <h3>S'adapte à vos besoins et évolue en temps réel selon votre environnement</h3>
                        <input id="cmn-toggle-4" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="cmn-toggle-4"></label>
</div>

</body>
</html>
        <script src="pg.js"></script>


</body>


</html>

  <title>Onglets</title>
    <style type="text/css">
        #onglets{
            display: none;
        }
        #onglets li{
            position: relative;
            float: left;
            list-style: none;
            padding: 2px 5px 7px;
            margin-right: 5px;
            border: 1px solid #1175AE;
            cursor: pointer;
            background-color: #EEEEEE;
            color: #0D5995;
            z-index: 1;
        }
        #onglets .actif{
            border-bottom: none;
            font-weight: bold;
            z-index: 10;
        }
        #contenu{
            clear: both;
            position: relative;
            margin: 0 20px;
            padding: 10px;
            border: 5px solid #0D5995;
            z-index: 5;
            top: -6px;
            background-color: #EEEEEE;
            color: #0F67A1;
            width: 700px;
            overflow: hidden;
            border-radius: 15px;
        }
    </style>



