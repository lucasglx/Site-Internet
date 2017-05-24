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
        <div class="pièce">
            <p>pièce par pièce</p>
        </div>
        <div class="menu">
            <div class="température">
        	   <img src="img/tempe%CC%81rature.png" />
                <figcaption>température</figcaption>
            </div>
            <div class="caméra">
        	   <img src="img/came%CC%81ra.png" />
                <figcaption>caméra</figcaption>

            </div>
            <div class="volet">
        	   <img src="img/volet.png" />
                <figcaption>volet</figcaption>
            </div>
            <div class="mode">
                <img src="img/mode.png" />
                <figcaption>Paramètrer les modes</figcaption>
            </div>
        </div>
        <div class="contenu">
                <div class="option economie">
                    <img src="img/power.png" class="power" height="42" width="42">
                    <h1> Mode Economie </h1>
                    <h3>Faite des économies tout en pensant à la planète</h3>
                    <div class="switch">
                        <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="cmn-toggle-1"></label>
                    </div>
                </div>
                <div class="option voyage">
                    <img src="img/avion.png" class="avion" height="42" width="42">
                    <h1> Mode Voyage </h1>
                    <h3>Minimisez votre consomation d'énergie</h3>
                    <div class="switch">
                        <input id="cmn-toggle-2" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="cmn-toggle-2"></label>
                    </div>
                </div>
                <div class="option secutite">
                    <img src="img/cadenas.png" class="cadenas" height="42" width="42">
                    <h1> Mode Sécurité </h1>
                    <h3>Quittez votre domicile l'ésprit tranquille</h3>
                    <div class="switch">
                        <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="cmn-toggle-3"></label>
                    </div>                   
                </div>
                <div class="option automatique">
                    <img src="img/ampoule.png" class="ampoule" height="42" width="42">
                    <h1> Géstion automatique de luminosité </h1>
                    <h3>S'adapte a vos besoins et évolue en temps réel selon votre environnement</h3>
                     <div class="switch">
                        <input id="cmn-toggle-4" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="cmn-toggle-4"></label>
                    </div>                   
                </div>
        </div>
